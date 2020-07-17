<!DOCTYPE html>
<html lang="es">
<?php

include_once('conexion.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$res = $conn->query("Select * from doctor");
$resultado = $res->fetch_row();

echo '<pre>';
var_dump($_POST);
echo '</pre>';
echo '<pre>';
var_dump($resultado);
echo '</pre>';
if(false){
    header('Location: login.php');
}
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
    <h2>Bienvenido: <?php echo $resultado[4]; ?></h2>
    <div class="container-fluid">
        <button type="button" class="btn btn-primary">Buscar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
    </div>
</body>

</html>