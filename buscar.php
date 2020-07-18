<!DOCTYPE html>
<html lang="es">
<?php
include_once('conexion.php');
session_start();

if (sizeof($_POST) > 0) {
    $res = $conn->query("SELECT * FROM Paciente WHERE poliza ='" . $_POST["poliza"] . "'");
    $resultado = $res->fetch_array();
    $resGlu = $conn->query("SELECT * FROM Glucosa WHERE id_paciente = " . $resultado[0] . "");
    $resultadoGlu = $resGlu->fetch_all();
    $resHemo = $conn->query("SELECT * FROM Hemoglobina WHERE id_paciente = " . $resultado[0] . "");
    $resultadoHemo = $resHemo->fetch_all();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Home</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['line']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Muestras');
            data.addColumn('number', 'Resultados');

            data.addRows([
                <?php
                for ($i = 0; $i < sizeof($resultadoGlu); $i++) {
                    echo "[" . ($i + 1) . ", " . $resultadoGlu[$i][1] . "],";
                }
                ?>
            ]);

            var options = {
                chart: {
                    title: 'Resultados de glucosa',
                    subtitle: 'Muestras'
                },
                width: 900,
                height: 500
            };

            var chart = new google.charts.Line(document.getElementById('glucosa'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['line']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Muestras');
            data.addColumn('number', 'Resultados');

            data.addRows([
                <?php
                for ($i = 0; $i < sizeof($resultadoHemo); $i++) {
                    echo "[" . ($i + 1) . ", " . $resultadoHemo[$i][1] . "],";
                }
                ?>
            ]);

            var options = {
                chart: {
                    title: 'Resultados de hemoglobina',
                    subtitle: 'Muestras'
                },
                width: 900,
                height: 500
            };

            var chart = new google.charts.Line(document.getElementById('hemoglobina'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
</head>

<body>
    <h2>Bienvenido: <?php echo 'Dr. ' . $_SESSION["doctor"][1] . ' ' . $_SESSION["doctor"][2]; ?></h2>
    <form method="post" action="" <?php echo $_SERVER['PHP_SELF']; ?>">
        <input class="form-control" type="text" name="poliza">
        <button type="submit" class="btn btn-primary">Buscar</button>
        <br>

        <?php
        if (sizeof($_POST) > 0) {
            echo "<h3>Nombre del paciente: " . $resultado[2] . " " . $resultado[3] . " " . $resultado[4] . " </h3>";
        }
        ?>

        <div id="glucosa" style="width: 900px; height: 500px"></div>
        <div id="hemoglobina" style="width: 900px; height: 500px"></div>
    </form>
</body>

</html>