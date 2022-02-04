var dude = document.getElementById('vasho');

dude.addEventListener('click', function() {
    var scoreElement = this.nextElementSibling,
    score = Number(scoreElement.textContent);

    console.log(typeof score);

    score = score + 1
    scoreElement.textContent = score;
});