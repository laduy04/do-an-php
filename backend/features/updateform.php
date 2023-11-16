<?php
$level = './../';
require_once $level . 'config.php';
require_once $level . DATABASE_PATH . 'connection.php';
require_once $level . XULY_PATH . 'dsdh.php';

$ma_dh = $_GET['ma_dh'];
$sql = "SELECT * FROM qlydonhang WHERE ma_dh =$ma_dh";
$result = $pdo->query($sql);

foreach ($result as $value) {
    $ma_dh = $_GET['ma_dh'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Sửa đơn hàng</h3>
    <form action="orderupdate.php" method="post">
        <label for="ma_dh">Mã đơn hàng:</label>
        <input type="text" name="ma_dh" id="ma_dh" value=<?php echo $value['ma_dh'] ?>>
        <label for="trang_thai">Trạng thái:</label>
        <select name="trang_thai" id="trang_thai">
            <option value="delivering">Đang giao</option>
            <option value="delivered">Đã giao</option>
            <option value="canceled">Đã hủy</option>
            <option value="refunded">Đã hoàn tiền</option>
            <option value="receiving">Đang lấy hàng</option>
        </select>
        <button>Cập nhựt</button>
    </form>

</body>

</html>