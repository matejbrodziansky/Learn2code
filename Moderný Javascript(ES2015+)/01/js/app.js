let author = {
    id: 2,
    name: "Ervin Howell",
    username: "Antonette",
    email: "Shanna@melissa.tv",
    phone: "010-692-6593-x09125",

    get displayName(){
        return `${this.name} (${this.email})}`
        }

};

// let { name, email } = author;
// console.log(
//     author.displayName
// ); 

// function doMath(...rest){
//     return rest.reduce((sum, val) => sum + val )
// }

// function doMathTwo(times = 100 , ...rest){
//     return rest.reduce((sum, val) => sum + val ) * times;
// }

// console.log(
//     doMathTwo(10,2,5,7)
// )


import { Users } from "./Users.js";

(async () => {

	const ul = document.querySelector('.users');

	let response = await fetch('https://jsonplaceholder.typicode.com/users');
	let users = new Users( await response.json(), ul );

	users.printAll();

})()