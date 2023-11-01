<?php
$product_list = array(
    array("product_name" => "iPhone 13 Pro 128GB", "color" => "Đỏ", "price" => "30.750.000", "total" => "30.750.000", 'photo' => 'iPhone_13.jpg'),
    array("product_name" => "iPhone 11 Pro 128GB", "color" => "Xanh", "price" => "17.000.000", "total" => "17.000.000", 'photo' => 'iphone11.png'),
);
?>
<tbody>
    <?php
    foreach ($product_list as $product) {
        echo (' <tr>
        <td>
            <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle"></div>
        </td>
        <td>
            <div class="product-title item-center">
                <img src= ' . $level . IMG_PATH . $product['photo'] . ' alt="">
                <div>
                    <p>' . $product['product_name'] . '</p>
                    <p>' . $product['color'] . '</p>
                </div>
            </div>
        </td>
        <td>
            <div class="item-center">' . $product['total'] . '</div>
        </td>
        <td>
            <div class="item-center">
                <div class="quantity">
                    <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button" value="-">
                    <input type="number" max="10" min="1" name="quantity" value="1" class="quantity-input" id="quantity-input">
                    <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button" value="+">
                </div>
            </div>
        </td>
        <td>
            <div class="item-center text-red">30.750.000đ</div>
        </td>
        <td>
            <div class="item-center pinside10"><i class="far fa-trash-alt"></i></div>
        </td>
    </tr>');
    }
    ?>
</tbody>
</table>