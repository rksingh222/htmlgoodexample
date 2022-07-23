const draggableListItems = document.querySelectorAll(".draggable-list li");
let selectedId;
let dropTargetId;
console.log("test");
console.log(draggableListItems);

function dragStart() {
    //when a source gets dragged;
    selectedId = this.id;
    console.log(selectedId + "dragStart");
}
function dragEnter() {
    //when a source reaches above a valid drop target;
    this.classList.add("over");
    console.log(this.id + "dragEnter") ;
}
function dragLeave() {
    //when a source leaves a valid drop target;
    this.classList.remove("over");
    console.log(this.id + "dragLeave");
}
function dragOver(ev) {
    //to prevent this to happen
    ev.preventDefault();
}
function drop() {
    // when it drops on the target
    console.log(this.id + "drop");
    dropTargetId = this.id;
    if(equalise(selectedId,dropTargetId)){
        document.getElementById(selectedId).style.display = "none";
        document.getElementById(dropTargetId).style.display = "none";
    }

}

function equalise(source, target) {

    console.log("entered equalise");
    switch (source) {
        case 'e1':
            console.log("equalise")
            return target === 'g1' ? true : false;
        case 'e2':
            return target === 'g2' ? true : false;
        case 'e3':
            return target === 'g3' ? true : false;
        case 'e4':
            return target === 'g4' ? true : false;

    }
}


draggableListItems.forEach(item => {
    item.addEventListener('dragstart', dragStart);
    item.addEventListener('dragenter', dragEnter);
    item.addEventListener('dragleave', dragLeave);
    item.addEventListener('dragover', dragOver);
    item.addEventListener('drop', drop);
})