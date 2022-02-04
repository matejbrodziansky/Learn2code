//  ------------- DU --------------

// a)
// -------------------------------------------------------------------------
console.log('Ahoj, truľo');
console.log(4 + 12);


// b)
function hello(name) {
    console.log('Ahoj,', name, 'ty truľo');
}

hello('Mates');


// c)
// -------------------------------------------------------------------------
function count(numberOne, NumberTwo) {
    var numberOne = prompt('Zadaj prvé číslo'),
        numberTwo = prompt('Zadaj druhé číslo');

    countResult = parseInt(numberOne) + parseInt(numberTwo);

    console.log('NumberOne + NumberTwo =', countResult);
}
// count(5 , 4)


// d)    (s promt ale aj bez )
// -------------------------------------------------------------------------
function sum(numberOne, numberTwo, mathSign) {

    //if empty arguments
    if (!(numberOne && numberTwo && mathSign)) {
        console.log('tu');
        var numberOne = prompt('Zadaj prvé číslo'),
            numberTwo = prompt('Zadaj druhé číslo'),
            mathSign = prompt('Zadaj jedno z : +,  -,  *,  /, ');
    };

    var numberOne = parseInt(numberOne),
        numberTwo = parseInt(numberTwo);

    switch (mathSign) {
        case '+':
            result = numberOne + numberTwo;
            break;
        case '-':
            result = numberOne - numberTwo;
            break;
        case '*':
            result = numberOne * numberTwo;

            break;
        case '/':
            result = numberOne / numberTwo;
            break;
        default:
            result

    }

    console.log(numberOne + mathSign + numberTwo, '=', result);
}
sum(4, 5, '+');
// sum();


// e)
// -------------------------------------------------------------------------
function how_much(countOfProduct, priceOfOne) {

    var list = document.getElementById('how-much'),
        newItem = document.createElement('p');

    finalPrice = parseInt(countOfProduct) * parseInt(priceOfOne);
    message = 'Kúpil som si ' + priceOfOne + ' predmetov za ' + finalPrice + '€ dokopy.';

    newItem.textContent = message;
    list.appendChild(newItem);

}

var countOfProduct = 5,
    priceOfOne = 300;
how_much(countOfProduct, priceOfOne);
