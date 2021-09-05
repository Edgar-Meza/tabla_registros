<?php
      include('variables.php');
      session_start();
      if($_SESSION['token'] !== 'Validado'){
        dead();
      }
      include('config/db.php');
      include('config/agregar.php');
      include('config/eliminar.php');
      include('config/actualizar.php');
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Administrar</title>
    <script src="js/index.js"></script>
  </head>
  <body class="cpb">
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-dark  sticky-top barnav">
        <div class="container-fluid row bbnv">
          <div class="col-lg-1 col-md-1 col-sm-12 text-center log">
            <div class="text-center texto-1 cursor-p font-gv" id="fh5co-logo">
							<span style="vertical-align: super;">E</span>
							<span style="vertical-align: sub;">M</span>
						</div>
          </div>
          <div class="col-lg-11 col-md-11 col-sm-12 text-center btn-agregar" onclick="nuevo()">
            <span class="bi-plus-circle" data-bs-toggle="modal" data-bs-target="#datos"></span>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 bt-cerrar">
            <form action="auth.php" method="post">
              <label class="bi-box-arrow-right btn-c" for="cerrar"></label>
              <input class="d-none" type="submit" name="cerrar" value="cerrar" id="cerrar">
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid bodyt">
        <table class="table table-hover">
          <thead class="cabecera table-light">
            <tr>
              <th scope="col">id</th>
              <th scope="col">col1</th>
              <th scope="col">col2</th>
              <th scope="col">col3</th>
              <th scope="col">col4</th>
              <th scope="col" class="text-center">Editar</th>
              <th scope="col" class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody style="border-style: hidden">
              <?php

                $datostab = "SELECT * FROM registros order by id DESC";
                $ejecutar = mysqli_query($conexion, $datostab);

                while($tabla = mysqli_fetch_array($ejecutar)){
                  echo "<tr><td scope='row'>".$tabla[0]."</td>
                        <td>".$tabla[1]."</td>
                        <td>".$tabla[2]."</td>
                        <td>".$tabla[3]."</td>
                        <td>".$tabla[4]."</td>
                        <td class='text-primary btn-actualizar p-0 text-center' data-bs-toggle='modal' data-bs-target='#datos' onclick='actualizar(".$tabla[0].",\"".$tabla[1]."\",".$tabla[2].",\"".$tabla[3]."\",\"".$tabla[4]."\")'><span class='bi-pencil-square'></span></td>
                        <td class='text-danger btn-eliminar p-0 text-center' data-bs-toggle='modal' data-bs-target='#eliminar' onclick='eliminar(".$tabla[0].")'><span class='bi-trash'></span></td></tr>";
                }
               ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="datos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="titulo">Agregar Dato</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
          </div>
          <div class="modal-body">
            <form class="form" method="post">
              <div class="form-group">
                <label for="col1" class="form-label">col1</label>
                <input type="text" name="col1" id="col1" class="form-control" oninput="d_col1()">
              </div>
              <div class="form-group">
                <label for="col2" class="form-label">col2</label>
                <input type="text" name="col2" id="col2" class="form-control" oninput="d_col2()">
              </div>
              <div class="form-group">
                <label for="col3" class="form-label">col3</label>
                <input type="text" name="col3" id="col3" class="form-control" oninput="d_col3()">
              </div>
              <div class="form-group">
                <label for="col4" class="form-label">col4</label>
                <input type="text" name="col4" id="col4" class="form-control" oninput="d_col4()">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <form method="post">
              <input type="hidden" name="idup" id="idup">
              <input type="hidden" id="col1d" name="col1d">
              <input type="hidden" id="col2d" name="col2d">
              <input type="hidden" id="col3d" name="col3d">
              <input type="hidden" id="col4d" name="col4d">
              <input type="submit" class="btn btn-success" name="guardar" value="Guardar" id="save">
              <input type="submit" class="btn btn-success" name="actualizar" value="Actualizar" style="display:none" id="update">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="titdel">Elimniar registro</h4>
            <button type="button" class="btn-close" bata-bs-dismiss="modal" aria-label="close"></button>
          </div>
          <div class="modal-body">
            <h5>¿Deseas eliminar el registro?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" name="cancelar" class="btn btn-danger" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            <form method="post">
              <input type="hidden" name="idelete" id="idelete">
              <input type="submit" name="delete" value="Aceptar" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
