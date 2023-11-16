<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trang_thai;
    switch ($_POST["trang_thai"]) {
        case 'delivering':
            $trang_thai = 'Đang giao';
            break;
        case 'delivered':
            $trang_thai = "Đã giao";
            break;
        case 'canceled':
            $trang_thai = "Đã hủy";
            break;
        case 'refunded':
            $trang_thai = "Đã hoàn tiền";
            break;
        case 'receiving':
            $trang_thai = "Đang lấy hàng";
            break;
        default:
            break;
    }
    $ma_dh = $_POST["ma_dh"];
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
