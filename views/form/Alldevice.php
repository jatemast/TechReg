 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparatos Registrados</title>
</head>
<body>
    <div>
        <h1>Aparatos Registrados</h1>

        <!-- Filtro de Dueño -->
        <form action="index.php" method="GET">
            <label for="duenio">Dueño:</label>
            <input type="search" name="duenio" id="duenio" value="<?= isset($_GET['duenio']) ? htmlspecialchars($_GET['duenio']) : ''; ?>" placeholder="Buscar por dueño">
            <button type="submit">Filtrar</button>
        </form>

        <hr>

        <!-- Mostrar Aparatos -->
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre Aparato</th>
                    <th>Dueño</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // Usamos un foreach para recorrer todos los aparatos y mostrarlos en la tabla
                    if (!empty($aparatos)) :
                        foreach ($aparatos as $aparato):
                ?>
                    <tr>
                        <td><?= htmlspecialchars($aparato['nombre_aparato']); ?></td>
                        <td><?= htmlspecialchars($aparato['duenio']); ?></td>
                        <td><?= htmlspecialchars($aparato['categoria_id']); ?></td>
                        <td><?= htmlspecialchars($aparato['descripcion']); ?></td>
                        <td><?= htmlspecialchars($aparato['fecha_registro']); ?></td>
                    </tr>
                <?php 
                        endforeach; 
                    else: 
                ?>
                    <tr>
                        <td colspan="5">No se encontraron aparatos registrados</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
