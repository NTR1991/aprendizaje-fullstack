<?php
require_once 'conexion.php';

$error = '';

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
        $sql = "INSERT INTO juegos (titulo, desarrollador, plataforma, genero, anio) 
                VALUES (:titulo, :desarrollador, :plataforma, :genero, :anio)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':desarrollador' => $desarrollador,
            ':plataforma' => $plataforma,
            ':genero' => $genero,
            ':anio' => $anio
        ]);
        header('Location: index.php?mensaje=Juego creado correctamente');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Juego</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>➕ Añadir <span>Videojuego</span></h1>
        <a href="index.php" class="volver">← Volver al listado</a>

        <?php if ($error): ?>
            <div class="mensaje-error">❌ <?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" value="<?= htmlspecialchars($_POST['titulo'] ?? '') ?>" required>

            <label>Desarrollador:</label>
            <input type="text" name="desarrollador" value="<?= htmlspecialchars($_POST['desarrollador'] ?? '') ?>" required>

            <label>Plataforma:</label>
            <input type="text" name="plataforma" value="<?= htmlspecialchars($_POST['plataforma'] ?? '') ?>" required>

            <label>Género:</label>
            <input type="text" name="genero" value="<?= htmlspecialchars($_POST['genero'] ?? '') ?>" required>

            <label>Año:</label>
            <input type="number" name="anio" value="<?= htmlspecialchars($_POST['anio'] ?? '') ?>" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>