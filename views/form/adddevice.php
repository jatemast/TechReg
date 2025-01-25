<?php include $_SERVER['DOCUMENT_ROOT'] . '/celularesphppuro/views/layout/header.php'; ?>

   <!-- Font Awesome para los iconos -->
 <link rel="stylesheet" href="/celularesphppuro/assets/css/styles.css">

 <?php include('../layout/sidebar.php'); ?>

<div class="form-container">
    <h2><i class="fas fa-cogs icon"></i>Registrar Aparato</h2>
    <form id="aparatoform" action="<?= '/celularesphppuro/controllers/ProductoController.php' ?>" method="POST" enctype="multipart/form-data">
        
        <!-- Nombre del aparato -->
        <div class="input-icon">
            <label for="nombre_aparato">Nombre del aparato</label>
            <input type="text" id="nombre_aparato" name="nombre_aparato" placeholder="Nombre del aparato" required>
            <i class="fas fa-tv"></i>
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/celularesphppuro/views/layout/footer.php'; ?>
