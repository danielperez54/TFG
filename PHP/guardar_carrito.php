<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$_SESSION['carrito'] = $data;
echo json_encode(['status' => 'success']);
?>
