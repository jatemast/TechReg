<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../../assets/css/login.css">

 </head>
<body>
    <div class="main-wrapper">
        

        <div class="container">
            <h2>Iniciar Sesión</h2>
            <form action="/auth/process_login.php" method="post">
                <input type="email" class="input-field" placeholder="Correo Electrónico" required><br>
                <input type="password" class="input-field" placeholder="Contraseña" required><br>
                <div class="action-buttons">
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                    <a href= "../autenticacion/register.php" class="btn-registro">Registrarse</a>
                    </div>
            </form>
        </div>

     

</body>
</html>
