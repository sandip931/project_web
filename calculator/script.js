
const display=document.getElementById("display");

function appendToDisplay(input){
    display.value += input;
}

function clearScreen(){
    display.value='';
}

function deleteButton(){
    display.value = display.value.slice(0, -1);
}
function calculate(){
    try{
    display.value = eval(display.value);
    }
    catch(error){
        display.value = error;
    }
}
