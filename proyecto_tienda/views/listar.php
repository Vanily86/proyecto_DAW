<h1>Catálogo de Productos</h1>
<a href="index.php?controller=producto&action=create">Nuevo Producto</a>
<style>
    table { border-collapse: collapse; width: 80%; margin-top: 20px; font-family: sans-serif; }
    th, td { border: 1px solid #ccc; padding: 12px; text-align: left; }
    th { background-color: #f8f9fa; }
    tr:hover { background-color: #f1f1f1; }
</style>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p['nombre'] ?></td>
        <td><?= $p['precio'] ?></td>
        <td><?= $p['stock'] ?></td>
        <td>
            <a href="index.php?controller=producto&action=edit&id=<?= $p['id'] ?>">Editar</a>
            <a href="index.php?controller=producto&action=delete&id=<?= $p['id'] ?>" 
               onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>