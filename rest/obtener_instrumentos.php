<?php
header('Content-Type: application/json');
require "../librerias_php/setUp.php";
// Obtener parámetros de paginación
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 12;  // Por defecto 10 elementos por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;      // Por defecto página 1
$offset = ($page - 1) * $limit;  // Calcular el offset para la consulta
$stmt = $pdo->query("SELECT COUNT(*) FROM instrumentos");
$total_items = $stmt->fetchColumn();

$stmt = $pdo->prepare("
    SELECT 
        i.id, 
        i.nombre_instrumento, 
        i.precio, 
        i.estado,
        m.nombre_marca as marca
    FROM 
        instrumentos AS i 
    JOIN 
        marcas AS m ON i.marca_id = m.id 
    ORDER BY 
        i.id DESC
    LIMIT :limit OFFSET :offset
");
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$instrumentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_pages = ceil($total_items / $limit);

// Responder con los datos y la información de paginación
echo json_encode([
    'instrumentos' => $instrumentos,
    'total_pages' => $total_pages,
    'current_page' => $page
]);
