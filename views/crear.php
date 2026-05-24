<!DOCTYPE html>
<html>
<head>
    <title>Crear Problema</title>
</head>
<body>
    <h1>Crear Problema</h1>

    <form method="POST">
        Tipo:<br>
        <select name="tipo" required>
            <option value="informatico">Informático</option>
            <option value="ergonomico">Ergonómico</option>
        </select><br><br>
        
        Título:<br>
        <input type="text" name="titulo" required><br><br>

        Descripción:<br>
        <input type="text" name="descripcion" required><br><br>
        
        Prioridad:<br>
        <input type="text" name="prioridad" required><br><br>
        
        Fecha:<br>
        <input type="date" name="fecha" required><br><br>
        
        Equipo Afectado (Solo Informático):<br>
        <input type="text" name="equipoAfectado"><br><br>
        
        Zona del Cuerpo (Solo Ergonómico):<br>
        <input type="text" name="zonaCuerpo"><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>