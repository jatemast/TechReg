<?php
// Incluir el archivo de conexión a la base de datos
include '../conexion.php';

// Consulta para obtener todos los aparatos registrados
$sql = "SELECT * FROM registros_aparatos";

// Ejecutar la consulta
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Obtener todos los registros
$aparatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Incluir la vista para mostrar los resultados
include 'Alldevice.php';
?>
