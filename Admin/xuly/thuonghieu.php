<?php
require_once($level . DATABASE_PATH . 'connection.php');
$_dsth = $conn->query("SELECT * FROM `thongtinthuonghieu`");
$dsth = $_dsth->fetchAll(PDO::FETCH_ASSOC);
