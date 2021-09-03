function d_nombre(){
  var nombre = document.getElementById('nombre');
  document.getElementById('nombred').value = nombre.value;
}
function d_apellidos(){
  var apellidos = document.getElementById('numero');
  document.getElementById('numerod').value = apellidos.value;
}
function d_edad(){
  var edad = document.getElementById('relacion');
  document.getElementById('relaciond').value = edad.value;
}
function d_correo(){
  var correo = document.getElementById('estado');
  document.getElementById('estadod').value = correo.value;
}
function eliminar(idel){
  document.getElementById('idelete').value = idel;
}
function actualizar(idu, nombre, numero, relacion, estado){
  document.getElementById('save').style.display = 'none';
  document.getElementById('update').style.display = 'block';
  document.getElementById('idup').value = idu;
  document.getElementById('nombre').value = nombre;
  document.getElementById('numero').value = numero;
  document.getElementById('relacion').value = relacion;
  document.getElementById('estado').value = estado;
  document.getElementById('nombred').value = nombre;
  document.getElementById('numerod').value = numero;
  document.getElementById('relaciond').value = relacion;
  document.getElementById('estadod').value = estado;
}
function nuevo(){
  document.getElementById('idup').value = "";
  document.getElementById('nombre').value = "";
  document.getElementById('apellidos').value = "";
  document.getElementById('edad').value = "";
  document.getElementById('correo').value = "";
  document.getElementById('nombred').value = "";
  document.getElementById('numerod').value = "";
  document.getElementById('relaciond').value = "";
  document.getElementById('estadod').value = "";
}
