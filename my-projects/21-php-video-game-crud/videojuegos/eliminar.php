<?php
require_once 'conexion.php';

$id = (int) $_GET['id'];

$stmt = $pdo->prepare("SELECT id FROM juegos WHERE id = :id");
$stmt->execute([':id' => $id]);
if ($stmt->rowCount() === 0) {
    header('Location: index.php?mensaje=Juego no encontrado');
    exit;
}

$stmt = $pdo->prepare("DELETE FROM juegos WHERE id = :id");
$stmt->execute([':id' => $id]);

header('Location: index.php?mensaje=Juego eliminado correctamente');
exit;
?>