<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_dh = $_POST["ma_dh"];
    $trang_thai = $_POST["trang_thai"];
    try {
        require_once "../database/connection.php";
        $query = "UPDATE qlydonhang SET trang_thai = :trang_thai WHERE ma_dh = :ma_dh;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":ma_dh", $ma_dh);
        $stmt->bindParam(":trang_thai", $trang_thai);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../pages/admin-manager-recipt.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ./pages/admin-manager-recipt.php");
}
