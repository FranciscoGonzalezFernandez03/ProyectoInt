<?php $titulo = 'Iniciar sesión'; include 'views/header.php'; ?>
 
<section class="formulario">
    <h2>Iniciar sesión</h2>
 
    <?php if (isset($error)): ?>
        <p class="error"><b>Error:</b> <?= $error ?></p>
    <?php endif; ?>
 
    <form method="POST">
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </p>
        <p>
            <label><input type="checkbox" name="recordarme"> Recordarme en este equipo</label>
        </p>
        <button type="submit">Entrar</button>
    </form>
 
    <p>¿No tienes cuenta? <a href="index.php?accion=alta">Regístrate aquí</a></p>
</section>
 
<?php include 'views/footer.php'; ?>