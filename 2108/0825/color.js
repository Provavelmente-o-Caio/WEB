function dado(faces) {
    return Math.ceil(Math.random() * faces);
}

const site = document.querySelector("body");
const r = dado(255);
const g = dado(255);
const b = dado(255);
site.style.backgroundColor = `rgb( ${r}, ${g}, ${b} )`;

let nome = "Caio";
let sobrenome = "zarth";

console.log( `meu nome completo é ${nome} ${sobrenome} !!!!` );