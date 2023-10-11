<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Tus datos</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $cuenta = $_POST["cuenta"];
        $carrera = $_POST["carrera"];

        echo "Tu número de cuenta es: $cuenta<br>";
        echo "Tu edad es: $edad<br>";
        echo "Tu número de cuenta es: $cuenta<br>";
        echo "Perteneces a la carrera de: $carrera";
    }
    ?>
</body>
</html>