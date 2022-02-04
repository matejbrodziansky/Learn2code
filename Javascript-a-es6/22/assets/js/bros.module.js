var Bros = (function () {

    //grab them dudes 
    var dudes = document.querySelectorAll('.choice img'); 
    dudes = Array.prototype.slice.call(dudes);        


    //return all 
    var getAllDudes = function(){
        return dudes;
    }

    var getKeyFrom = function (dude) {
        return 'score' + _.capitalize(dude.alt);
    }
    
    var getScore = function (dude) {
        return +localStorage.getItem(getKeyFrom(dude)) || 0; // + set number // || ak splni pred kod dalej nejde , inak druha strana (default operator)
    }
    
    var setScore = function (dude, score) {
        localStorage.setItem(getKeyFrom(dude), score);
    }
    
    var updateDude = function (dude) {
        var score = getScore(dude);
        dude.nextElementSibling.textContent = score;
    }
    
    var increaseScore = function (dude) {
        var score = getScore(dude);  // get score from local storage 
        score++;
    
        setScore(dude, score);   // set score to localstorage
        updateDude(dude);  // set score after click to html
    
    }

    return{
        all: getAllDudes,
        getScore: getScore,
        setScore: setScore,
        updateDOM: updateDude,
        increaseScore: increaseScore
    }

}());