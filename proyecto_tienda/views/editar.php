<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <a href="index.php?controller=producto&action=index">Volver al listado</a>
    <hr>

    <?php if (!empty($errores)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errores as $e): ?>
                    <li><?= $e ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="index.php?controller=producto&action=update&id=<?= $producto['id'] ?>" method="POST">
        <p>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required>
        </p>

        <p>
            <label>Descripción:</label><br>
            <textarea name="descripcion"><?= htmlspecialchars($producto['descripcion']) ?></textarea>
        </p>

        <p>
            <label>Precio:</label><br>
            <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required>
        </p>

        <p>
            <label>Stock:</label><br>
            <input type="number" name="stock" value="<?= $producto['stock'] ?>" required>
        </p>

        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>