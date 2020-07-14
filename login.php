<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form method="post" action="home.php">
            <div class="form-group">
                <label for="user">Usuario:</label>
                <input id="user" class="form-control" type="text" name="user" required="true">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input id="pass" class="form-control" type="password" name="pass"required="true">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>