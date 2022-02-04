//helper function
// -------------------------------------------
function log(variable) {
    console.log(variable);
}
// -------------------------------------------

document.getElementsByTagName('h1')[0].addEventListener('click', function () {

    var score = +localStorage.getItem('anyTime');

    var data = [
        {
            name: 'vasho',
            sexiness: 'off the charts',
            score: score
        },

        {
            name: 'mitch',
            sexiness: 'hamburger off the floor',
            score: score
        },
    ];
    log( JSON.stringify(data));

    if ( ! score ) {
        score = 0;
    }

    localStorage.setItem('score', ++score);
    localStorage.setItem('anyTime', JSON.stringify(data));


});


var dudes = document.querySelectorAll('.choice img');  //node list nie je pole nepojde na to foreach
dudes = Array.prototype.slice.call(dudes);        // aj pre staršie prehliadače vytvorí pole  // Array.from(dudes)  -> po  novom 


dudes.forEach(function (dude) {

    dude.addEventListener('click', function () {
        var scoreElement = this.nextElementSibling,
            score = Number(scoreElement.textContent);

        score = score + 1
        scoreElement.textContent = score;
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





