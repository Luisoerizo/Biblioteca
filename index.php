<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Archivo Bootstrap CSS-->
    <link type="text/css"rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Archivo CSS propio-->
    <link type="text/css"rel="stylesheet" href="css/estilos.css">
    <title>Tópicos de bases de datos</title>
</head>
<body>

<!-- Navbar-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-expand-lg navbar-expand-xl">
  <a class="navbar-brand " href="#">Tópicos de base de datos</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="individuales.html">Individuales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="generales.html">Generales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="actualizar.html">Actualizar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eliminar.html">Eliminar</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Form-->
<h1>BIBLIOTECA</h1>
<!-- 

  <div class="container">
    <div class="row">
      <form>
        <fieldset>
          <legend>Nombre</legend>
          <input type="text" class="form-control" id="item"/>
          <br>
          <legend>Tipo de artículo</legend>
          <label class="label_rb">
            <input type="radio" name="tipoArticulo" value="azul"> LIBRO
          </label>
          <label class="label_rb"> 
              <input type="radio" name="tipoArticulo" value="negro"> ARTÍCULO
          </label>
          <label class="label_rb">
              <input type="radio" name="tipoArticulo" value="amarillo"> REVISTA
          </label>

          <br>
          <legend>ISNB</legend>
          <input type="number" class="form-control" id="isbn"/>
          <br>
          <legend>Autor</legend>
          <input type="text" class="form-control" id="autor"/>
          <br>
          <legend>Edición</legend>
          <input type="number" class="form-control" id="edicion"/>
          <br>
          <legend>Editorial</legend>
          <input type="text" class="form-control" id="editorial"/>
          <br>
          <legend>Capítulo</legend>
          <input type="text" class="form-control" id="capitulo"/>
          <br>
          <button class="btn btn-success">Agregar a la biblioteca</button>
        </fieldset>
      </form>

      <table  class="table table-bordered table-hover" id="listaArticulos"></table>
    </div>
  </div>
-->

<h3 class="mt-3">Lista de artículos</h3>
 <div class="container-fluid">
  <div class="row w-100">
    <div class="col text-center">
      <button class="btn btn-success mt-3">Mostrar artículos</button>
    </div>
  </div>
 </div>
 <hr>
 

<?php
$usuario = 'root';
$contraseña = '';
$host = 'localhost';
$base = 'biblioteca';

try{
  $conexion = mysqli_connect($host,$usuario,$contraseña,$base);
}
catch(PDOException $e){
    print "Error: " .$e->getMessage() ."<br/>";
    die();
}
?>

<section class="">
  <table class="table">
  <thead class="thead-dark">
  <tr> 
        <th > ID</th>
        <th scope="col"> Titulo </th>
        <th scope="col"> ISBN </th>
        <th scope="col"> Edicion </th>
        <th scope="col"> Editorial </th>
        <th scope="col"> Capitulo </th>
        <th scope="col"> Autor libro </th>
      </tr>
  </thead>
  
    
        <?php
        $sql="SELECT * FROM libros";
        $result=mysqli_query($conexion,$sql);

        while ($mostrar=mysqli_fetch_array($result)){
          ?>

        <tbody>
        <tr class="">
          <th scope="row"><?php echo $mostrar['idLibro'] ?></td>
          <td class=""><?php echo $mostrar['titulo'] ?></td>
          <td class=""><?php echo $mostrar['isbn'] ?></td>
          <td class=""><?php echo $mostrar['noEdicion'] ?></td>
          <td class=""><?php echo $mostrar['editorial'] ?></td>
          <td class=""><?php echo $mostrar['nomCap'] ?></td>
          <td class=""><?php echo $mostrar['autorLibro'] ?></td>
          
        </tr>
        </tbody>
        <?php
        }
        ?>


     
  </table>
</section>

    <!-- Archivos Bootstrap Javascript-->

<script src="js/crud.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>