<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

 ?>

<!DOCTYPE html>

<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Proyecto</title>
</head>

<body>
     <table>
            <tr>
            <td><a style="text-decoration: none; border: 3px solid; border-radius:10px; padding: 3px; color: green;" href="index.php">Inicio</a></td>
            </tr>
     </table>
     <table class="centrar">
          <tbody class="home">
               <tr>
                    
                    <td>
                         <a class="button" href="logout.php">Cerrar Sesión</a>
                    </td>
               </tr>
          </tbody>
     </table>

     <div class="listas">
        <h1>Usuarios Registrados</h1>
        <h2>Puedes ver o modificar la información aquí</h2>
    </div>
    <div class="centrar">
      <table class="tablas">
      <tbody class="centrar">
        <?php include 'read.php';?>
      </tbody>
    </table>
  </div>
  
</body>

</html>

<?php 

}else{

header("Location: sesion.php");

exit();

}

?>