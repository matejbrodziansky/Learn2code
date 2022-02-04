//  ------------- DU --------------
console.log('*****************************');
console.log('--------- Zadanie 4 ---------');
console.log('*****************************');

//helper function
// -------------------------------------------
function log(variable, variableTwo = null) {
    console.log(variable);

    if (variableTwo) {
        console.log(variable);
    }
}

// a)  
// -------------------------------------------------------------------------
console.log('---------------- a )----------------');


// first function
function sumManyArgumentsOne(/**/) {

    var args = arguments,
        sum = 0;
    for (var i = 0; i < args.length; i++) {
        sum += args[i];
    }
    //return two decimal numbers
    return sum.toFixed(2);
};

//second same function 
log(sumManyArgumentsOne(2.2, 3.2));

function sumManyArgumentsTwo(/**/) {

    var args = Array.from(arguments);
    return args.reduce(function (first, current) {
        return +(first + current).toFixed(10);
    });
};

log(sumManyArgumentsTwo(2.2, 3.2, 4.8));




// b)  
// -------------------------------------------------------------------------
console.log('---------------- b )----------------');


function getNumbers(string){
    
    var num = string.replace(/\D/g,'');
    
    return num;
}

function retnum(str) { 
    var num = str.replace(/[^0-9]/g, ''); 
    return parseInt(num,10); 
}


var string = "123px456em789dž";

log(getNumbers(string, 10));
log(retnum(string, 10));


// c)  
// -------------------------------------------------------------------------
console.log('---------------- c )----------------');


// selection text set to body
document.addEventListener("mouseup", function () {
    if (document.getSelection()) {
        document.querySelector("#demo").textContent = document.getSelection();
    } else if (window.getSelection()) {
        document.querySelector("#demo").textContent = document.getSelection();
    } else if (document.selection) {
        document.querySelector("#demo").textContent = document.selection.createRange().text;
    }
});


// log  selection text 
document.addEventListener("mouseup", checkForSelection);
function checkForSelection(evt) {
    var selectedText = window.getSelection().toString();
    if (selectedText) {
        // console.log("Selected Text: " + selectedText);
        console.log( selectedText);
    } else {
        console.log("No Text Selected");
    }
}