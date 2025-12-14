<?php include "db/db.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>CRUD Cámaras</title>
<style>
body { font-family: Arial; background:#f4f4f4; padding:30px; }
form, table { background:#fff; padding:20px; border-radius:8px; }
input, textarea, button { width:100%; margin:8px 0; padding:8px; }
table { width:100%; margin-top:20px; border-collapse: collapse; }
td, th { border:1px solid #ccc; padding:10px; }
a { text-decoration:none; color:blue; }
</style>
</head>
<body>

<h2>Agregar cámara</h2>
<form method="POST" action="crear.php">
  <input name="nombre" placeholder="Nombre" required>
  <textarea name="descripcion" placeholder="Descripción"></textarea>
  <input name="precio" type="number" step="0.01" placeholder="Precio" required>
  <button>Guardar</button>
</form>

<h2>Listado</h2>
<table>
<tr>
  <th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM productos");
while($row = $result->fetch_assoc()):
?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['nombre'] ?></td>
  <td>$<?= $row['precio'] ?></td>
  <td>
    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
    <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
  </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
