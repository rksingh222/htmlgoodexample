<?php

function display($value){
    echo "<pre>",print_r($value,true),"</pre>";
    die();
}

$host = "127.0.0.1";
$username = "root";
$password = "Rahul22-2-85";
$db_name = "blogger";

$conn = mysqli_connect($host,$username,$password,$db_name) or die("connection unsuccessful");
if($conn->connect_error){
    die("connection error no " . $conn->connect_errno);
}
$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql) or die("sql failed". $conn->connect_errno);
if(mysqli_num_rows($result) > 0){
    $output = '<table cellspacing="0" cellpadding="10px">
               <tr><th>Id</th><th>email</th></tr>';
               while($row = mysqli_fetch_assoc($result)){
                   $output .= "<tr><td>{$row["id"]}</td><td>{$row["email"]}</td>";
               }
    $output .= '</table>';
    mysqli_close($conn);
    echo $output;           
}
else {
    echo "<h1>No record found</h1>";
}