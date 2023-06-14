
<link rel="stylesheet" type="text/css" href="style.css"><?php
include("conexion.php");

if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    $sql = "DELETE FROM menu WHERE id=$id";
    mysqli_query($conexion, $sql);
}




$sql = "SELECT * FROM menu";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<div style="text-align: center;">
  <img src="mx.webp" width="100" height="100">
</div>

    <title>CRUD de calificaciones</title>
</head>
 <style>
        body {
            background-image: url('rsmx.jfif');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

<body>
 <h1 style="text-align: center;">menu de los lingotes</h1>    

    <h2 style="text-align: center;">MENU</h2>    
    <table border="1">
        <thead>
            <tr>
                <th>num_menu</th>
                <th>platillo</th>
                <th>bebidas</th>
                <th>postre</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["num_menu"] . "</td>";
                echo "<td>" . $fila["platillo"] . "</td>";
                echo "<td>" . $fila["bebidas"] . "</td>";
                echo "<td>" . $fila["postre"] . "</td>";
                echo "<td>" . $fila["precio"] . "</td>";
                  echo "<td>";
                echo "<a href='editar.php?id=" . $fila['id'] . "'>Editar</a>";
                echo " | ";
                echo "<a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            

        </tbody>    
    </table>
 <a href="nuevo_alumno.php"><button style="background-color: #A43A62;">Agregar alumno</button></a>


   
</body>
</html>