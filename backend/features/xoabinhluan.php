<?php
$level = '../';
require_once $level . 'config.php';
require_once $level . DATABASE_PATH . 'connection.php';
require_once $level . XULY_PATH . 'dsbinhluan.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $query = "DELETE FROM comments WHERE id =:id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $pdo = null;
    $stmt = null;
    header("Location: ../pages/feedback.php");
    die();
} else {
    header("Location: ../pages/feedback.php");
}
