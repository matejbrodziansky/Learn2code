//helper function
function log(variable) {
    console.log(variable);
}

var dudes = document.querySelectorAll('.choice img');  //node list nie je pole nepojde na to foreach
dudes = Array.prototype.slice.call(dudes);        // aj pre staršie prehliadače vytvorí pole  // Array.from(dudes)  -> po  novom 

// 

dudes.forEach(function (dude) {

    dude.addEventListener('click', function () {
        var scoreElement = this.nextElementSibling,
            score = Number(scoreElement.textContent);

        score = score + 1
        scoreElement.textContent = score;
    });

});


