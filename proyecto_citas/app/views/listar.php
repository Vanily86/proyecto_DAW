<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Citas Médicas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Gestión de Citas Médicas</h1>
        <a href="index.php?action=create" class="btn btn-success">+ Agendar Cita</a>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Especialidad</th>
                    <th>Fecha/Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($citas as $c): ?>
                <tr>
                    <td><?= htmlspecialchars($c['paciente']) ?></td>
                    <td><?= htmlspecialchars($c['especialidad']) ?></td>
                    <td><?= $c['fecha'] ?> (<?= $c['hora'] ?>)</td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $c['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="index.php?action=delete&id=<?= $c['id'] ?>" class="btn btn-danger" onclick="return confirm('¿Eliminar cita?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>