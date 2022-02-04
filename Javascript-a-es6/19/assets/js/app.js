//helper function
// -------------------------------------------
function log(variable) {
    console.log(variable);
}
// -------------------------------------------




var dudes = document.querySelectorAll('.choice img');  //node list nie je pole nepojde na to foreach
dudes = Array.prototype.slice.call(dudes);        // aj pre staršie prehliadače vytvorí pole  // Array.from(dudes)  -> po  novom 



dudes.forEach(function (dude) {

    //load score from localstorage to html
    updateDude(dude); 

    dude.addEventListener('click', function () {

        increaseScore(dude);

    });

    // mouse eneter, enemy hurts
    dude.addEventListener('mouseover', function () {

        var otherDude = _.without(dudes, this)[0];

        otherDude.classList.add('desaturate');

    });

    // mouse eneter, enemy RISES
    dude.addEventListener('mouseout', function () {

        var otherDude = _.without(dudes, this)[0];
        otherDude.classList.remove('desaturate');

    });

});


function getKeyFrom(dude) {
    return 'score' + _.capitalize(dude.alt);
}

function getScore(dude) {
    return +localStorage.getItem(getKeyFrom(dude)) || 0; // + set number // || ak splni pred kod dalej nejde , inak druha strana (default operator)
}

function setScore(dude, score) {
    localStorage.setItem(getKeyFrom(dude), score);
}

function updateDude(dude) {
    var score = getScore(dude);
    dude.nextElementSibling.textContent = score;
}

function increaseScore(dude) {
    var score = getScore(dude);  // get score from local storage 
    score++;

    setScore(dude, score);   // set score to localstorage
    updateDude(dude);  // set score after click to html

}






