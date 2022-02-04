//helper function
// -------------------------------------------
function log(variable) {
    console.log(variable);
}
// -------------------------------------------



var dudes = Bros.all();

dudes.forEach(function (dude) {

    //load score from localstorage to html
    Bros.updateDOM(dude);

    dude.addEventListener('click', function () {

        Bros.increaseScore(dude);

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








