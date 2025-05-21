<?php
session_start();
require_once 'include/config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['count' => 0]);
    exit();
}

$user_id = $_SESSION['user_id'];

// Récupérer le nombre total d'articles dans le panier
$stmt = $connexion->prepare("SELECT SUM(quantite) as total FROM panier WHERE u_id = ?");
$stmt->execute([$user_id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$count = $result['total'] ? (int)$result['total'] : 0;

echo json_encode(['count' => $count]);
?>
