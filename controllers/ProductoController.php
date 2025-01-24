<?php
// Incluir el archivo de conexión
include '../conexion.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtener los datos del formulario
    $nombre_aparato = $_POST['nombre_aparato'];
    $categoria_id = $_POST['categoria_id'];
    $duenio = $_POST['duenio'];
    $descripcion = $_POST['descripcion'];
    $fecha_registro = $_POST['fecha_registro'];

    // Procesar la imagen (si se ha subido una)
    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_nombre_original = $_FILES['foto']['name'];
        $foto_tipo = $_FILES['foto']['type'];
        $foto_tamano = $_FILES['foto']['size'];

        // Validar el tipo y tamaño del archivo
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($foto_tipo, $allowed_types) && $foto_tamano <= 5000000) {
            // Generar un nombre único para la imagen
            $extension = pathinfo($foto_nombre_original, PATHINFO_EXTENSION);
            $foto_nombre = uniqid('img_', true) . '.' . $extension;

            // Ruta donde se almacenará la imagen
            $ruta_destino = '../imagenes/' . $foto_nombre;

            // Mover la imagen a la carpeta de destino
            if (move_uploaded_file($foto_tmp, $ruta_destino)) {
                $foto = $foto_nombre;
            } else {
                echo "Error: No se pudo guardar la imagen.";
                exit;
            }
        } else {
            echo "Error: El archivo no es válido o excede el tamaño permitido.";
            exit;
        }
    }

    // Insertar los datos en la base de datos
    try {
        $sql = "INSERT INTO registros_aparatos (nombre_aparato, categoria_id, duenio, descripcion, foto, fecha_registro) 
                VALUES (:nombre_aparato, :categoria_id, :duenio, :descripcion, :foto, :fecha_registro)";

        $stmt = $pdo->prepare($sql);

        // Vincular los parámetros
        $stmt->bindParam(':nombre_aparato', $nombre_aparato);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':duenio', $duenio);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':fecha_registro', $fecha_registro);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "El aparato se ha registrado exitosamente.";
        } else {
            echo "Hubo un error al registrar el aparato.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
