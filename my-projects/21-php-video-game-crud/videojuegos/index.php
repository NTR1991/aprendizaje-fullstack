<?php
require_once 'conexion.php';

$stmt = $pdo->query("SELECT * FROM juegos ORDER BY id DESC");
$juegos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Videojuegos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>🎮 Catálogo de <span>Videojuegos</span></h1>
        <a href="crear.php" class="boton-crear">➕ Añadir nuevo juego</a>
        <br><br>

        <?php if (isset($_GET['mensaje'])): ?>
            <div class="mensaje-exito">✅ <?= htmlspecialchars($_GET['mensaje']) ?></div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Desarrollador</th>
                    <th>Plataforma</th>
                    <th>Género</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($juegos as $juego): ?>
                <tr>
                    <td><?= $juego['id'] ?></td>
                    <td><?= htmlspecialchars($juego['titulo']) ?></td>
                    <td><?= htmlspecialchars($juego['desarrollador']) ?></td>
                    <td><?= htmlspecialchars($juego['plataforma']) ?></td>
                    <td><?= htmlspecialchars($juego['genero']) ?></td>
                    <td><?= $juego['anio'] ?></td>
                    <td>
                        <div class="acciones">
                            <a href="editar.php?id=<?= $juego['id'] ?>" class="btn-editar">✏️ Editar</a>
                            <a href="eliminar.php?id=<?= $juego['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Seguro que quieres eliminar este juego?')">🗑️ Eliminar</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>