function d_col1(){
  var col1 = document.getElementById('col1');
  document.getElementById('col1d').value = col1.value;
}
function d_col2(){
  var col2 = document.getElementById('col2');
  document.getElementById('col2d').value = col2.value;
}
function d_col3(){
  var col3 = document.getElementById('col3');
  document.getElementById('col3d').value = col3.value;
}
function d_col4(){
  var col4 = document.getElementById('col4');
  document.getElementById('col4d').value = col4.value;
}
function eliminar(idel){
  document.getElementById('idelete').value = idel;
}
function actualizar(idu, col1, col2, col3, col4){
  document.getElementById('save').style.display = 'none';
  document.getElementById('update').style.display = 'block';
  document.getElementById('idup').value = idu;
  document.getElementById('col1').value = col1;
  document.getElementById('col2').value = col2;
  document.getElementById('col3').value = col3;
  document.getElementById('col4').value = col4;
  document.getElementById('col1d').value = col1;
  document.getElementById('col2d').value = col2;
  document.getElementById('col3d').value = col3;
  document.getElementById('col4d').value = col4;
}
function nuevo(){
  document.getElementById('idup').value = "";
  document.getElementById('col1').value = "";
  document.getElementById('col2').value = "";
  document.getElementById('col3').value = "";
  document.getElementById('col4').value = "";
  document.getElementById('col1d').value = "";
  document.getElementById('col2d').value = "";
  document.getElementById('col3d').value = "";
  document.getElementById('col4d').value = "";
}
