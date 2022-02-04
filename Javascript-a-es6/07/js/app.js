function addMessage(elementId, message) {

    var browseList = document.getElementById(elementId),
        newItem = document.createElement('li');

    newItem.textContent = message;

    browseList.appendChild(newItem);

}

addMessage('browser', 'Page ')


//Click add element
document.body.addEventListener('click', function clickedIt() {
    addMessage('user', 'totally clicket it')

});

// //mousemove add element
document.body.addEventListener('keypress', function keyboardedIt() {

    var oldLeft = getComputedStyle(document.body).left,
        newLeft;

    oldLeft = parseInt(oldLeft, 10); // 50px -> 50  // ,10 v ktorej sustave pracujeme

    // staršie prehliadače event.keyCode
    if (event.key == 'a') {
        newLeft = oldLeft - 10;  // 40
    }
    else if (event.key == 'd') {
        newLeft = oldLeft + 10;   // 60
    }

    document.body.style.left = newLeft + 'px'; 

    // addMessage('user', event.key)
});

// before reload page 
window.addEventListener('beforeunload', function(event ) {
    addMessage('browser', "don't try to close me!");

    event.returnValue = ':('; 
    // pojde na kazdom prehliadaci
    return ':(';
});

