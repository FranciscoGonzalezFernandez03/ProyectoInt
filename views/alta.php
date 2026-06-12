<?php $titulo = 'Crear cuenta'; include 'views/header.php'; ?>
 
<section class="formulario">
    <h2>Crear nueva cuenta</h2>
 
    <form method="POST">
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required minlength="4">
        </p>
        <button type="submit">Registrarse</button>
    </form>
 
    <p>¿Ya tienes una cuenta? <a href="index.php?accion=login">Inicia sesión aquí</a></p>
</section>
 
<?php include 'views/footer.php'; ?>