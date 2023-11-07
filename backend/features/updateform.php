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
        <input type="text" name="ma_dh" id="ma_dh" placeholder="Mã đơn hàng">
        <select name="trang_thai" id="trang_thai">
            <option value="delivering">Đang giao</option>
            <option value="delivered">Đã giao</option>
            <option value="canceled">Đã hủy</option>
            <option value="refunded">Đã hoàn tiền</option>
            <option value="receiving">Đang lấy hàng</option>
        </select>
        <button>Update</button>
    </form>


</body>




</html>