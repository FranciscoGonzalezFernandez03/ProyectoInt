<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><b>Error:</b> <?=  $error ?></p>
    <?php endif; ?>

        <form method="POST">
            Email:<br>
            <input type="email" name="email" required><br><br>


            Contraseña:<br>
            <input type="password" name="password" required><br><br>
            <input type="checkbox" name="recordarme"> Recordarme en este equipo<br><br>
            <button type="submit">Entrar</button>
        </form>

        <br>
        <p>¿No tienes cuenta? <a href="index.php?accion=registro">Regístrete aquí</a></p>
        <a href="index.php">Volver al inicio</a>
</body>
</html>