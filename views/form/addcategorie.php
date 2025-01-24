<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Categoría</title>
    <!-- Enlace a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #2d3748;
            text-align: center;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 1s ease-in-out;
        }

        label {
            color: #4a5568;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #38a169;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button:hover {
            background-color: #2f855a;
        }

        button i {
            margin-right: 8px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-message {
            display: none;
            margin-top: 15px;
            color: #38a169;
            font-weight: bold;
            text-align: center;
        }

        .error-message {
            display: none;
            margin-top: 15px;
            color: #e53e3e;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <form id="aparatoform" action="<?= '/celularesphppuro/controllers/CategoriaController.php' ?>" method="POST" enctype="multipart/form-data">
        <h1><i class="fas fa-folder-plus"></i> Agregar Categoría</h1>

        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej. Electrónicos" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe brevemente la categoría..." required></textarea>

        <button type="submit">
            <i class="fas fa-save"></i> Agregar Categoría
        </button>

        <p class="success-message" id="successMessage">Categoría agregada exitosamente!</p>
        <p class="error-message" id="errorMessage">Ocurrió un error. Intenta nuevamente.</p>
    </form>

    <script>
        const form = document.getElementById('aparatoform');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');

        form.addEventListener('submit', (event) => {
            event.preventDefault(); // Evitar envío por defecto

            // Simular éxito o error con una animación
            const isSuccess = Math.random() > 0.5; // Simula éxito al azar

            if (isSuccess) {
                successMessage.style.display = 'block';
                errorMessage.style.display = 'none';
                form.reset();
            } else {
                errorMessage.style.display = 'block';
                successMessage.style.display = 'none';
            }

            // Ocultar mensajes después de 3 segundos
            setTimeout(() => {
                successMessage.style.display = 'none';
                errorMessage.style.display = 'none';
            }, 3000);
        });
    </script>
</body>
</html>
