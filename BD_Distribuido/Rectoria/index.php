<?php
$servidores = [
    [
        "ip" => "10.92.0.64",
        "user" => "rectoria",
        "password" => "Rectoria2026!",
        "database" => "bd_norte",
    ], //ok
    [
        "ip" => "10.92.0.121",
        "user" => "rectoria",
        "password" => "Rectoria2026!",
        "database" => "bd_sur",
    ], //ok
    [
        "ip" => "10.92.0.21",
        "user" => "rectoria",
        "password" => "Rectoria2026!",
        "database" => "bd_oriente",
    ], //ok
    [
        "ip" => "10.92.0.56",
        "user" => "rectoria",
        "password" => "Rectoria2026!",
        "database" => "bd_poniente",
    ] //ok
];

$resultados = [];

foreach ($servidores as $servidor) {
    $conexion = @new mysqli($servidor["ip"], $servidor["user"], $servidor["password"], $servidor["database"]);

    if ($conexion->connect_error) {
        echo "<p style='color:#ff0000'><b>Error de conexion en {$servidor["ip"]}: {$conexion->connect_error}</b></p>";
        continue;
    }

    $conexion->set_charset("utf8");
    $sql = "SELECT id, nombre, campus FROM alumnos";
    $resultado = $conexion->query($sql);

    if (!$resultado) {
        echo "<p style='color:#ff0000'>Error en la consulta en {$servidor["ip"]}: {$conexion->errno} - {$conexion->error}</p>";
        $conexion->close();
        continue;
    }

    $resultados[] = [
        "ip" => $servidor["ip"],
        "resultado" => $resultado
    ];
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Distribuida</title>
</head>

<body>
    <br><br>
    <h3>BASE DE DATOS DISTRIBUIDA - UNIVERSIDAD</h3>
    <?php if (!empty($resultados)) { ?>
        <br>
        <table border="1"style="border-collapse: collapse;">
            <thead>
                <tr align="center" >
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Campus</th>
                    <th>Nodo Origen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $respuesta) {
                    while ($registro = $respuesta["resultado"]->fetch_assoc()) { ?>
                        <tr align="center" >
                            <td><?php echo $registro["id"]; ?></td>
                            <td><?php echo $registro["nombre"]; ?></td>
                            <td><?php echo $registro["campus"]; ?></td>
                            <td><?php echo $respuesta["ip"]; ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    <?php } else {
        echo "<p style='color: #ff0000'>SIN RESULTADOS</p>";
    } ?>
</body>

</html>
