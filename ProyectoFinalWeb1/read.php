<?php
  include 'conexion.php';

  $sql = "select * from usuarios";

  echo "<thead>";
  echo "<th>Nombre</th>";
  echo "<th>Usuario</th>";
  echo "<th>Contraseña</th>";
  echo "<th>Teléfono</th>";
  echo "<th>Email</th>";
  echo "</thead>";
  echo "<tbody>";


  $result = $conexion->query($sql);
  while($row = $result->fetch_assoc()) {
    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
      echo '<form action="update.php" method="POST">';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="nombre" value="'.$row['nombre'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="usuario" value="'.$row['usuario'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="pass" value="'.$row['pass'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="number" name="cellnum" value="'.$row['cellnum'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="email" value="'.$row['email'].'"></td>';
      

      echo '<td><button style="border: 2px solid pink; border-radius: 10px; background: pink; padding: 3px; text-align: center; font-weight: bold; font-size: 0.9em;" type="submit"> Guardar </button></td>';
      echo '<td><button style="border: 2px solid orange; border-radius: 10px; background: orange; padding: 3px; text-align: center; font-weight: bold; font-size: 0.9em;" type="cancel"> Cancelar </button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['usuario'] . "</td>";
      echo "<td>" . $row['pass'] . "</td>";
      echo "<td>" . $row['cellnum'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      
      echo '<td><a href="home.php?id=' . $row['id'] . '" role="button" style="border: 2px solid mediumaquamarine; border-radius: 10px; background: mediumaquamarine; padding: 3px; text-align: center; text-decoration: none; color: black; font-weight: bold; font-size: 0.8em;">Actualizar</a></td>';
      echo '<td><a href="delete.php?id=' . $row['id'] . '" role="button" style="border: 2px solid tomato; border-radius: 10px; background: tomato; padding: 3px; text-align: center; text-decoration: none; color: black; font-weight: bold; font-size: 0.8em;">Eliminar</a></td>';
    }
    echo "</tr>";
  }
  $conexion->close();
?>