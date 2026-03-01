<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servidor centralizado</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th { background: #333; color: white; padding: 8px; }
        td { border: 1px solid #ddd; padding: 8px; }
    </style>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    
    <?php
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "centralizada");
    
    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    // Consultar usuarios
    $resultado = $conn->query("SELECT * FROM usuario");
    
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Rol</th><th>Fecha Registro</th></tr>";
        
        while($usuario = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . $usuario['nombre'] . "</td>";
            echo "<td>" . $usuario['rol'] . "</td>";
            echo "<td>" . $usuario['fecha_registro'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No hay usuarios registrados";
    }
    
    $conn->close();
    ?>
</body>
</html>