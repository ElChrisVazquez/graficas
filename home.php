<!DOCTYPE html>
<html lang="es">
<?php

include_once('conexion.php');
session_start();

echo '<pre>';
var_dump($_POST);
echo '</pre>';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res = $conn->query("SELECT * FROM Medico WHERE usuario = '" . $_POST['user'] . "' AND contrasena = '" . $_POST['pass'] . "' LIMIT 1");
$resultado = $res->fetch_array();

if (sizeof($resultado) == 0) {
    header('Location: login.php');
}
echo '<pre>';
var_dump($resultado);
echo '</pre>';


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
</head>

<body>
    <h2>Bienvenido: <?php echo 'Dr. '.$resultado[1].' '.$resultado[2]; ?></h2>
    <div class="container-fluid">
        <button type="button" class="btn btn-primary">Buscar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
    </div>
</body>

</html>