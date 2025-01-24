<?php include('../celularesphppuro/views/layout/header.php'); ?>


<div class="form-container">
    <h2><i class="fas fa-cogs icon"></i>Registrar Aparato</h2>
    <form id="aparatoForm" action="procesar_registro.php" method="POST" enctype="multipart/form-data">
        
        <!-- Nombre del aparato -->
        <div class="input-icon">
            <label for="nombre_aparato">Nombre del aparato</label>
            <input type="text" id="nombre_aparato" name="nombre_aparato" placeholder="Nombre del aparato" required>
            <i class="fas fa-tv"></i>
        </div>
        
        <!-- Categoría -->
        <div class="input-icon">
            <label for="categoria_id">Categoría</label>
            <select id="categoria_id" name="categoria_id">
                <option value="1">Televisores</option>
                <option value="2">Laptops</option>
                <option value="3">Smartphones</option>
                <option value="4">Electrodomésticos</option>
            </select>
            <i class="fas fa-list-alt"></i>
        </div>

        <!-- Dueño -->
        <div class="input-icon">
            <label for="duenio">Dueño</label>
            <input type="text" id="duenio" name="duenio" placeholder="Nombre del dueño" required>
            <i class="fas fa-user"></i>
        </div>

        <!-- Descripción -->
        <div class="input-icon">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" placeholder="Descripción del aparato" required></textarea>
            <i class="fas fa-info-circle"></i>
        </div>

        <!-- Foto -->
        <div class="input-icon">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto" accept="image/*">
            <i class="fas fa-camera"></i>
        </div>

        <!-- Fecha de registro -->
        <div class="input-icon">
            <label for="fecha_registro">Fecha de Registro</label>
            <input type="text" id="fecha_registro" name="fecha_registro" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
            <i class="fas fa-calendar-alt"></i>
        </div>

        <!-- Botón de envío -->
        <button type="submit" class="btn-submit"><i class="fas fa-save icon"></i>Guardar Registro</button>
    </form>
    
    <div class="form-footer">
        <p><i class="fas fa-info-circle"></i> Todos los campos son obligatorios.</p>
    </div>
</div>

<script src="/celularesphppuro/assets/js/adddevice.js">
 
</script>

</body>
</html>
