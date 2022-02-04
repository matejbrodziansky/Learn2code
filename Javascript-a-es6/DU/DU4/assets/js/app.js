//  ------------- DU --------------
console.log('*****************************************************');
console.log('--------------------- Zadanie 4 ---------------------');
console.log('*****************************************************');

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
    log(JSON.stringify(data));

    if (!score) {
        score = 0;
    }

    localStorage.setItem('score', ++score);
    localStorage.setItem('anyTime', JSON.stringify(data));


});


// a)  
// -------------------------------------------------------------------------


var dudes = document.querySelectorAll('.choice img');  //node list nie je pole nepojde na to foreach
dudes = Array.prototype.slice.call(dudes);        // aj pre staršie prehliadače vytvorí pole  // Array.from(dudes)  -> po  novom 



dudes.forEach(function (dude) {

    dude.addEventListener('click', function () {
        var scoreElement = this.nextElementSibling,
            score = Number(scoreElement.textContent);

        score = score + 1
        scoreElement.textContent = score;
    });

    events = ["mouseover", "mouseout"]

    function eventsList(element) {
        events.forEach(function (eventType) {
            element.addEventListener(eventType, function () {
                _.without(dudes, this)[0].classList.toggle('desaturate');
            })
        });
    }

    eventsList(dude);

});




// b)  
// -------------------------------------------------------------------------
console.log('---------------- b )----------------');

// Create our number formatter.
function formatMoney(country, currency, number) {

    return new Intl.NumberFormat(country, {
        style: 'currency',
        currency: currency,
    }).format(number);

    //    return  formatter.format(number); 
}

// var number = 124234345321.35;
var number = 15321.35;

console.log(formatMoney('SK', 'EUR', number))

// c)  
// -------------------------------------------------------------------------
console.log('---------------- c )----------------');


function priceDiscount(price, discount) {

    return (price * discount) / 100;

}

var price = 124.12,
    discount = 13;

console.log(priceDiscount(price, discount));



















// var toggleClass = function (event) {
//     var otherDude = _.without(dudes, this)[0];
//     otherDude.classList.toggle('desaturate');
// };

// // Add our event listeners
// dude.addEventListener('mouseover', toggleClass, false);
// dude.addEventListener('mouseout', toggleClass, false);





