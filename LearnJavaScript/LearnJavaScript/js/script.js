function revealMessage(){
    document.getElementById("hiddenMessage").style.display = 'block';
}

function countDown(){
    var currentval = document.getElementById("countDownButton").innerHTML;
    var newval = 0;
    if (currentval > 0){
        newval = currentval - 1;
    }
    document.getElementById("countDownButton").innerHTML = newval;
}
