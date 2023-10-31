<?php
require_once($level . DATABASE_PATH . 'connection.php');
$_dsdh = $conn->query("SELECT * FROM `qlydonhang`");
$dsdh = $_dsdh->fetchAll(PDO::FETCH_ASSOC);
