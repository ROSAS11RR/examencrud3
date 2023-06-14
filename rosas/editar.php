<!DOCTYPE html>
<html>
<head>
    <title>Editar calificaciones</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Editar calificaciones</h1>
    <?php
    // Obtener ID del alumno a editar
    $id = $_GET['id'];

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "los_lingotes");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Obtener datos del alumno a editar
    $query = "SELECT * FROM menu WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($result);

    // Mostrar formulario con datos del alumno
    echo "<form action='actualizar.php' method='POST'>";
    echo "<input type='hidden' name='num_menu' value='" . $fila['num_cliente'] . "'>";
    echo "<label>Nombre:</label>";
    echo "<input type='text' name='platillo' value='" . $fila['tacos de asada'] . "' required>";
    echo "<br><br>";
    echo "<label>Parcial 1:</label>";
    echo "<input type='number' name='bebidas' step='0.01' value='" . $fila['coca cola'] . "' required>";
    echo "<br><br>";
    echo "<label>Parcial 2:</label>";
    echo "<input type='number' name='postres' step='0.01' value='" . $fila['chocoflan'] . "' required>";
    echo "<br><br>";
    echo "<label>Parcial 3:</label>";
    echo "<input type='number' name='precio' step='0.01' value='" . $fila['130'] . "' required>";
    echo "<br><br>";
    echo "<button type='submit'>Actualizar</button>";
    echo "</form>";

    // Cerrar conexión
    mysqli_close($conexion);
    ?>
</body>
</html>