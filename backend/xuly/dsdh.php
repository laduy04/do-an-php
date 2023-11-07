<?php
require_once($level . DATABASE_PATH . 'connection.php');
$sql = "SELECT * FROM qlydonhang;";
$stmt = $pdo->query($sql);
$dsdh = $stmt->fetchAll(PDO::FETCH_ASSOC);
