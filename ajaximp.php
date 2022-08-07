<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        table{
            width: 100%;
            border: none;
        }
        h1{
            background: #ffe5b4;
            padding : 20px 20px;
            text-align: center;
            border: none;
        }
        .load-data{
            background: #30d5c8;
            padding: 20px 20px;
            text-align: center;
            border: none;
        }
        #load-button{
            padding: 10px 15px;
            border-radius: 4px;
            outline: none;
        }
        #table-data{
            padding: 10px;
        }
        .content-table{
            border: 1px solid #686868;
            border-collapse: collapse;
        }
        th{
            border: 1px solid #686868;
            background: #87cefa;
            padding: 15px 20px;
        }
        table tr td table tr td{
            padding: 15px 20px;
            border: 1px solid #686868;
        }
        
    </style>
</head>

<body>
    <table cellspacing="0">
        <tr>
            <td>
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td class="load-data">
                <input type="button" id="load-button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table class="content-table" cellspacing="0" cellpadding="10px">
                    <tr class="table-header">
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Yahoo Baba
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
                $.ajax({
                    url:"ajax.php",
                    type:"POST",
                    success: function(data){
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
   
</body>

</html>