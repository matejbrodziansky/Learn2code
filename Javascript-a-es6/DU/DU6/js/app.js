var dudes = [
    {
        "who": "Finn the Human",
        "wat": "Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there's evil around, he'll slay it. That's his deal.",
        "comments": 4
    },

    {
        "who": "Jake the Dog",
        "wat": "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn.",
        "comments": 23
    },

    {
        "who": "Ice King",
        "wat": "Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.",
        "comments": 10
    },

    {
        "who": "Princess Bubblegum",
        "wat": "As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every branch of geekdom from rocket science to turtle farming.",
        "comments": 44
    },

    {
        "who": "Marcy the Vampire",
        "wat": "Marceline is a wild rocker girl. Centuries of wandering the Land of Ooo have made her a fearless daredevil.",
        "comments": 10
    }
];




//id for article 
id = document.getElementById('dudes'),

    dudes.forEach(function (dude) {

        var article = document.createElement('article'),
            attr = document.createElement('a'),
            paragraph = document.createElement('p'),
            h = document.createElement('h4');
        footer = document.createElement('footer');


        attr.href = "dude/" + dude.who;
        footer.className = "comments";

        attr.innerHTML = dude.who;
        paragraph.innerHTML = dude.wat;
        footer.innerHTML = dude.comments;


        id.appendChild(article).appendChild(h).appendChild(attr);
        article.appendChild(paragraph);
        article.appendChild(footer);

    });

//sumId for sum of dudes & comments
sumId = document.getElementById('sum-dudes-comments');
div = document.createElement('div');
strong = document.createElement('strong');
paragraph = document.createElement('p');


//sum of comments
var SumComments = 0;
for (var i = 0; i < dudes.length; i++) {
    SumComments += dudes[i].comments;
}


sumId.append(div);
paragraph.innerHTML = "Number of dudes: <strong>" + dudes.length + "</strong><br>Number of comments: <strong>" + SumComments + "</strong>";
div.appendChild(paragraph);
