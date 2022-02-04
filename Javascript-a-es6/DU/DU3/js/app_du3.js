//  ------------- DU --------------
console.log('*****************************************************');
console.log('--------------------- Zadanie 3 ---------------------');
console.log('*****************************************************');
// a)
// -------------------------------------------------------------------------
var pressedKeys = {}; // vztvorenie premennej s prazdnim objektom
document.body.addEventListener("keyup", function (event) {
    pressedKeys[event.key] = false;
    //ked je klavesa Up do objectu sa ulozi flase hodnota
});

document.body.addEventListener('keypress', function (event) {

    // vytiahnem si aktualnu hodnotu body { left: ?px }
    var oldLeft = getComputedStyle(document.body).left,
        oldTop = getComputedStyle(document.body).top,
        newLeft,
        newTop;

    oldLeft = parseInt(oldLeft, 10);
    oldTop = parseInt(oldTop, 10);



    pressedKeys[event.key] = true;
    //ked je klavesa Up do objectu sa ulozi true hodnota

    // podmienky pre kazdy even.key-- ked je klavesa down je true
    //tak sa pohybuje a mozme chodit aj diagonalne lebo su viacere buttons true
    if (pressedKeys["a"]) {
        newLeft = oldLeft - 10;
    }
    if (pressedKeys["d"]) {
        newLeft = oldLeft + 10;
    }
    if (pressedKeys["w"]) {
        newTop = oldTop - 10;
    }
    if (pressedKeys["s"]) {
        newTop = oldTop + 10;
    }


    document.body.style.left = newLeft + 'px';
    document.body.style.top = newTop + 'px';

});


// b)
// -------------------------------------------------------------------------
console.log('---------------- b )----------------');

function biggertNumber(numberOne, numberTwo) {

    var numberOne = parseInt(numberOne),
        numberTwo = parseInt(numberTwo);


    if (message = numberOne > numberTwo ? 'Císlo Jedna ktoré je ' + numberOne + ' je väčšie' : 'Císlo dva ktoré je ' + numberTwo + ' je väčšie')

        console.log(message);

}

biggertNumber(4, 5);



// c)
// -------------------------------------------------------------------------
console.log('---------------- c )----------------');

function sumOfNumbers(numbers) {

    var sum = 0;

    for (let i = 0; i < numbers.length; i++) {
        sum += numbers[i];
    }
    console.log('Súčet čísel je ' + sum);
}


const numbers = [1, 2, 3, 4, 5];

sumOfNumbers(numbers);

// d)
// -------------------------------------------------------------------------

console.log('---------------- d )----------------');
var everySecond = [1, 45, 65, 98, 321, 8578, 'some', 'house'];

// console.log(
//   everySecond.filter((x, i) => i % 2)
// )

function everySecondOne(everySecond) {
    console.log(
        everySecond.filter((x, i) => i % 2)
    )
}

everySecondOne(everySecond);


// d_2)  
// -------------------------------------------------------------------------
console.log('---------------- d_2 )-------------');
function everySecondTwo(array) {
    for (i = 1; i <= array.length - 1; i += 2) {
        console.log('Kazdé druhá hodnota ' + array[i]);
    }
}

var everySecondValue = [3, 'tree', 'company', 98, 321, 8578, 'javascript', 'php'];
everySecondTwo(everySecondValue);


// e)  
// -------------------------------------------------------------------------
console.log('---------------- e )----------------');

var array = [3, 6, 200, 56, 32, 5, 89, 32];


function biggestNumber(array) {


    var largest = 0;
    for (i = 0; i <= largest; i++) {
        if (array[i] > largest) {
            var largest = array[i];
        }

    }
    console.log('Najväčšie číšlo je ' + largest);
}

biggestNumber(array);


