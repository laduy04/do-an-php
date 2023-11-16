<?php
require_once($level . DATABASE_PATH . 'connection.php');
$stmt = $pdo->query("SELECT * FROM comments");
$dsbl = $stmt->fetchAll(PDO::FETCH_ASSOC);
