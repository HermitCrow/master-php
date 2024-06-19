
//Tipos de datos en JavaScript
// String: Cadena de carcteres. 'a' 'Hola' "a" "hola" '121332' "12121313"
//Boolean: True or False.
//Null: Nulo or Vacio.
//Number: Cualquier numero en JavaScript. 12121221 32121231321 333232 2323.
//"123" es un String, es distinto a 123 que es un Number.
//Undefined: No esta definida.
//Object: objeto.


//Definicion de variables
//var: var variableConVar
//let: 
//const 

let firstName = 'Juan'
//console.log(firstName)

//Mutabilidad
firstName = 'Nuevo valor >>> Gilberto'
//console.log(firstName)

//Boolean
let valoBoolean = true
//console.log(valoBoolean)

//Mutabilidad
valoBoolean = false
//console.log(valoBoolean)

//Number
let datosNumericos = 1
let datosNumericosEntero = 1221212
let datosNumericosNegativo = -3152
//console.log(datosNumericos,datosNumericosEntero,datosNumericosNegativo)

//Datos indefinidos
let Undef
//console.log(Undef)

//Tipo de datos nulos
let nulo = null
//console.log(nulo)

//Objetos es una agrupacion de datos, estos datos hacen sentido entre si.
const tipoDatoObjetoVacio = {} //Objeto Vacio.
const tipoDatoObjeto = {//Objetos con tres Propiedades.
    PropNumero: 12,
    PropTexto: 'Datos de texto en el objeto.',
    PropCondicional: false,
}

console.log(tipoDatoObjeto.PropNumero)