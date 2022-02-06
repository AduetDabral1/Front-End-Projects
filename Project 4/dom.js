var btn = document.getElementById("enter");
var userInput = document.getElementById("userinput");
var ul = document.querySelector("ul");


function inputLength(){
    return userInput.value.length;
}

function createListItem(){
    var li = document.createElement("li");
    li.appendChild(document.createTextNode(userInput.value));
    ul.appendChild(li);
    userInput.value = "";
}

function addListClick(){
    if(inputLength() > 0){
        createListItem();
    }
}

function addListKeypress(event){
    if(inputLength() > 0 && event.keyCode===13){
        createListItem();
    }
}

function toggleStyle(){
    var item = document.querySelectorAll("li");
    item.classList.toggle("style");
}

btn.addEventListener("click", addListClick);
userInput.addEventListener("keypress",addListKeypress);
item.addEventListener("click",toggleStyle)
