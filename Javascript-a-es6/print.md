---------------------------------------------------------------------------------
55 (npm) BABEL, moderný kód v starých prehliadačoch, Babel pluginy
---------------------------------------------------------------------------------


Babel vie ES6/7/8/+ kód (ktorý je moderný) zmeniť na ES5 kód (ktorý beží aj v starších prehliadačoch).
Podobne ako Sass vie zmeniť SCSS kód na CSS kód.

Najprv si vytvoríš tvoj zdrojový .js súbor, kam budeš písať ES6.
A prázdny .js súbor, ktorý chceš vkladať do stránky.
Babel doň z tvojho vzorového vyrobí ES5 kód.

Potrebuješ:

// vytvorit package.json
npm init -y
  
// pridat babel-cli do dev
npm install babel-cli --save-dev
  
// pridas set pluginov, co menia es6 na es5
npm install babel-preset-env --save-dev


A vytvoríš do adresára tvojej stránky súbor .babelrc

{
    "presets": ["env"]
}


Povieš, ktorý set pluginov v ňom chceš používať.
A si pripravený písať kód.
Keď skončíš, zadelíš:

 node_modules/.bin/babel src/app.js --out-file js/app.js


Ak tvoj zdrojový súbor je src/app.js.
A výsledný má byť v js/app.js.

---------------------------------------------------------------------------------
56 (npm) BABEL, ES2015+/ES6+ polyfill veď, watcher
---------------------------------------------------------------------------------


 node_modules/.bin/babel src -w -d js // bezí stale
 polyfill pre staršie brehliadače

 npm install --save babel-polyfill

 <script src="node_modules/babel-polyfill/dist/polyfill.min.js"></script>
