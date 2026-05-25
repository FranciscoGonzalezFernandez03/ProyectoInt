<!DOCTYPE html>
<html>
<head>
    <title>Problemas</title>
</head>
<body>
    <h1>Registro de Problemas</h1>

    <?php if (isset($_SESSION['usuario_id'])): ?>
        Bievenido, <b><?=  $_SESSION['usuarioEmail'] ?></b> |
        <a href="index.php?accion=logout">Cerrar Sesión</a>
        <?php else: ?>
            <a href="index.php?accion=login">Iniciar Sesión</a> |
            <a href="index.php?accion=alta">Registrarse</a>  |
        <?php endif; ?>
        



    <a href="index.php?accion=crear">Agregar Problema</a><p>


    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Prioridad</th>
            <th>Fecha</th>
            <th>Equipo Afectado</th>
            <th>Zona del Cuerpo</th>
            <?php if (isset($_SESSION['usuario_id'])): ?>

            <?php endif; ?>

            <th>Acciones</th>
        </tr>

        <?php foreach ($problemas as $p): ?>
        <tr>
            <td><?= $p->getId() ?></td>
            <td><?= ($p instanceof informatico) ? "Informático" : "Ergonómico"; ?></td>
            <td><?= $p->getTitulo() ?></td>
            <td><?= $p->getDescripcion() ?></td>
            <td><?= $p->getPrioridad() ?></td>
            <td><?= $p->getFecha() ?></td>
            <td><?= ($p instanceof informatico) ? $p->getEquipoAfectado() : "--"; ?></td>
            <td><?= ($p instanceof ergonomicos) ? $p->getZonaCuerpo() : "--"; ?></td>
            <td>
                <?php if (isset($_SESSION['usuario_id'])): ?>
                <a href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>