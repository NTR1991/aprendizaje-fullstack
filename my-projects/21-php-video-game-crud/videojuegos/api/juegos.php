<?php
// api/juegos.php
require_once '../conexion.php';

header('Content-Type: application/json');
$metodo = $_SERVER['REQUEST_METHOD'];

function responderError($codigo, $mensaje) {
    http_response_code($codigo);
    echo json_encode(['error' => $mensaje]);
    exit;
}

// GET
if ($metodo === 'GET') {
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM juegos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $juego = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$juego) responderError(404, 'Juego no encontrado');
        http_response_code(200);
        echo json_encode($juego, JSON_PRETTY_PRINT);
    } else {
        $stmt = $pdo->query("SELECT * FROM juegos ORDER BY id DESC");
        $juegos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        http_response_code(200);
        echo json_encode($juegos, JSON_PRETTY_PRINT);
    }
    exit;
}

// POST
if ($metodo === 'POST') {
    $datos = json_decode(file_get_contents('php://input'), true);
    if (!isset($datos['titulo'], $datos['desarrollador'], $datos['plataforma'], $datos['genero'], $datos['anio'])) {
        responderError(400, 'Todos los campos son obligatorios');
    }
    $anio = (int) $datos['anio'];
    if ($anio < 1970 || $anio > date('Y')) responderError(400, 'Año no válido');

    $sql = "INSERT INTO juegos (titulo, desarrollador, plataforma, genero, anio) 
            VALUES (:titulo, :desarrollador, :plataforma, :genero, :anio)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => trim($datos['titulo']),
        ':desarrollador' => trim($datos['desarrollador']),
        ':plataforma' => trim($datos['plataforma']),
        ':genero' => trim($datos['genero']),
        ':anio' => $anio
    ]);
    $id = $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM juegos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $juego = $stmt->fetch(PDO::FETCH_ASSOC);
    http_response_code(201);
    echo json_encode($juego, JSON_PRETTY_PRINT);
    exit;
}

// PUT
if ($metodo === 'PUT') {
    $datos = json_decode(file_get_contents('php://input'), true);
    if (!$datos) {
        parse_str(file_get_contents('php://input'), $datos);
    }
    if (!isset($_GET['id'])) responderError(400, 'Falta el id');
    $id = (int) $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM juegos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    if ($stmt->rowCount() === 0) responderError(404, 'Juego no encontrado');

    if (!isset($datos['titulo'], $datos['desarrollador'], $datos['plataforma'], $datos['genero'], $datos['anio'])) {
        responderError(400, 'Todos los campos son obligatorios');
    }
    $anio = (int) $datos['anio'];
    if ($anio < 1970 || $anio > date('Y')) responderError(400, 'Año no válido');

    $sql = "UPDATE juegos SET titulo = :titulo, desarrollador = :desarrollador, 
            plataforma = :plataforma, genero = :genero, anio = :anio WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => trim($datos['titulo']),
        ':desarrollador' => trim($datos['desarrollador']),
        ':plataforma' => trim($datos['plataforma']),
        ':genero' => trim($datos['genero']),
        ':anio' => $anio,
        ':id' => $id
    ]);
    $stmt = $pdo->prepare("SELECT * FROM juegos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $juego = $stmt->fetch(PDO::FETCH_ASSOC);
    http_response_code(200);
    echo json_encode($juego, JSON_PRETTY_PRINT);
    exit;
}

// DELETE
if ($metodo === 'DELETE') {
    if (!isset($_GET['id'])) responderError(400, 'Falta el id');
    $id = (int) $_GET['id'];

    $stmt = $pdo->prepare("SELECT id FROM juegos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    if ($stmt->rowCount() === 0) responderError(404, 'Juego no encontrado');

    $stmt = $pdo->prepare("DELETE FROM juegos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    http_response_code(204);
    exit;
}

responderError(405, 'Método HTTP no permitido');
?>