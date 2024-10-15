
/*console.log('Hola mundo');
//alert('Hola mundo');

let nombre = "Brenda";
console.log('Bienvenido ' + nombre);

nombre = "Ana";
var apellido = "Lara";
const apodo = "Profe";

console.log(`Bienvenido ${nombre} ${apellido} ${apodo}`);

let edad = 30;
let temperatura = 38.5;

console.log(edad);
console.log(temperatura);

let estaVivo = true;
console.log(estaVivo);*/

//Arreglos y Objetos
let frutas = ["manzana", "limón", "plátano", "mango"];
let persona = {
    nombre: "Juanito",
    edad: 30,
    escolaridad: "Licenciatura",
    materias: null,
    telefono: null
};

/*persona.telefono = "1234564546";
persona.direccion = "La Paz";
persona.nombre = "Pedrito"*/

//NaN
/*let numero = 3;
let palabra = "Hola";

//NO SE HACE
if((numero-palabra) == NaN){
    console.log("Sí es NaN");
}else{
    console.log("No es NaN");
}

console.log(Number.isNaN(numero - palabra));*/

//FUNCIONES
/*let numero = 6, numero2 = 8;

function sumar(a, b) {
    return a + b;
}

let resultado = sumar(numero, numero2);
console.log(resultado);*/

const numeros = [1,2,3,4,5,6];
console.log(numeros);
const numerosPorDos = numeros.map(x => x * 2);
console.log(numerosPorDos);

function saludo(edad, nombre = "Invitado"){
    console.log(`Bienvenido ${nombre}`);
    console.log(edad);
}

saludo(45);
saludo(34, "Brenda");

