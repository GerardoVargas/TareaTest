const nombre = "ADrian";
const apellido = "valenti";

//const nombreCompleto = nombre + " " + apellido;

//Template string dentro de ` se puede poner codigo js en $ {}`
const nombreCompleto = `${nombre} ${apellido}`;

console.log(nombreCompleto);

function getSaludo(nombre) {
  return " hola " + nombre;
}

console.log(`este e sun tento: ${getSaludo(nombre)}`);
