
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