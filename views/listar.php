<?php $titulo = 'Listado de problemas'; include 'views/header.php'; ?>
 
<h2>Registro de problemas</h2>
 
<a href="index.php?accion=crear" class="btn">Agregar problema</a>
 
<div class="tabla-contenedor">
    <table class="tabla-problemas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Prioridad</th>
                <th>Fecha</th>
                <th>Equipo afectado</th>
                <th>Zona del cuerpo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($problema as $p): ?>
            <tr>
                <td><?= $p->getId() ?></td>
                <td><?= ($p instanceof informatico) ? "Informático" : "Ergonómico" ?></td>
                <td><?= $p->getTitulo() ?></td>
                <td><?= $p->getDescripcion() ?></td>
                <td><?= $p->getPrioridad() ?></td>
                <td><?= $p->getFecha() ?></td>
                <td><?= ($p instanceof informatico) ? $p->getEquipoAfectado() : "--" ?></td>
                <td><?= ($p instanceof ergonomico) ? $p->getZonaCuerpo() : "--" ?></td>
                <td>
                    <?php if (isset($_SESSION['usuario_id'])): ?>
                        <a href="index.php?accion=editar&id=<?= $p->getId() ?>" class="btn-editar">Editar</a>
                        <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>" class="btn-eliminar">Eliminar</a>
                    <?php else: ?>
                        --
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
 
<?php include 'views/footer.php'; ?>