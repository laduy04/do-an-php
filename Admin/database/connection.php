<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=shopbanhang;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit(1);
}
