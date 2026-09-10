<?php
require_once 'conexion.php';

$id = (int) $_GET['id'];
$error = '';

// Obtener datos actuales del juego
$stmt = $pdo->prepare("SELECT * FROM juegos WHERE id = :id");
$stmt->execute([':id' => $id]);
$juego = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$juego) {
    header('Location: index.php?mensaje=Juego no encontrado');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo']);
    $desarrollador = trim($_POST['desarrollador']);
    $plataforma = trim($_POST['plataforma']);
    $genero = trim($_POST['genero']);
    $anio = (int) $_POST['anio'];

    if (empty($titulo) || empty($desarrollador) || empty($plataforma) || empty($genero) || empty($anio)) {
        $error = "Todos los campos son obligatorios.";
    } elseif ($anio < 1970 || $anio > date('Y')) {
        $error = "El año debe estar entre 1970 y " . date('Y');
    } else {
        // === CORRECCIÓN: USAR UPDATE EN LUGAR DE INSERT ===
        $sql = "UPDATE juegos SET 
                titulo = :titulo, 
                desarrollador = :desarrollador, 
                plataforma = :plataforma, 
                genero = :genero, 
                anio = :anio 
                WHERE id = :id";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':desarrollador' => $desarrollador,
            ':plataforma' => $plataforma,
            ':genero' => $genero,
            ':anio' => $anio,
            ':id' => $id
        ]);

        header('Location: index.php?mensaje=Juego actualizado correctamente');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Juego</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>✏️ Editar <span>Videojuego</span></h1>
        <a href="index.php" class="volver">← Volver al listado</a>

        <?php if ($error): ?>
            <div class="mensaje-error">❌ <?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" value="<?= htmlspecialchars($juego['titulo']) ?>" required>

            <label>Desarrollador:</label>
            <input type="text" name="desarrollador" value="<?= htmlspecialchars($juego['desarrollador']) ?>" required>

            <label>Plataforma:</label>
            <input type="text" name="plataforma" value="<?= htmlspecialchars($juego['plataforma']) ?>" required>

            <label>Género:</label>
            <input type="text" name="genero" value="<?= htmlspecialchars($juego['genero']) ?>" required>

            <label>Año:</label>
            <input type="number" name="anio" value="<?= htmlspecialchars($juego['anio']) ?>" required>

            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>