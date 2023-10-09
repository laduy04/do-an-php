<div class="container">
        <div class="cart-content mt30 mb30">
            <div class="title-header mb20">
                <h2 class="title">Giỏ Hàng</h2>
                <p><span class="text-blue">2</span> sản phẩm trong giỏ hàng của bạn</p>
            </div>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>Sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle"></div>
                        </td>
                        <td>
                            <div class="product-title item-center">
                                <img src=<?php echo $level.IMG_PATH."iPhone_13.jpg"?> alt="">
                                <div>
                                    <p>iPhone 13 Pro 128GB</p>
                                    <p>Màu sắc: Đỏ</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center">30.750.000đ</div>
                        </td>
                        <td>
                            <div class="item-center">
                                <div class="quantity">
                                    <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button"
                                        value="-">
                                    <input type="number" max="10" min="1" name="quantity" value="1"
                                        class="quantity-input" id="quantity-input">
                                    <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button"
                                        value="+">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center text-red">30.750.000đ</div>
                        </td>
                        <td>
                            <div class="item-center pinside10"><i class="far fa-trash-alt"></i></div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle"></div>
                        </td>
                        <td>
                            <div class="product-title item-center">
                                <img src=<?php echo $level.IMG_PATH."iphone11.png"?> alt="">
                                <div>
                                    <p>iPhone 11 Pro 128GB</p>
                                    <p>Màu sắc: Xanh</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center">17.000.000đ</div>
                        </td>
                        <td>
                            <div class="item-center">
                                <div class="quantity">
                                    <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button"
                                        value="-">
                                    <input type="number" max="10" min="1" name="quantity" value="1"
                                        class="quantity-input" id="quantity-input">
                                    <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button"
                                        value="+">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center text-red">17.000.000đ</div>
                        </td>
                        <td>
                            <div class="item-center pinside10"><i class="far fa-trash-alt"></i></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="prices-summary">
                <div class="left-content">
                    <a href="product-list.html" class="derection-product text-blue"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục
                        mua hàng</a>
                </div>
                <div class="right-con">
                    <div class="total-receipt">
                        <div class="promotion-code pinside20">
                            <input type="text" class="input-code" placeholder="Nhập mã ưu đãi">
                            <button type="submit" class="submit-code btn-default">Áp dụng</button>
                        </div>
                        <ul class="prices pinside20">
                            <li class="prices-item">
                                <span class="prices-text">Tạm tính</span>
                                <span class="prices-value">47.750.000đ</span>
                            </li>
                            <li class="prices-item">
                                <span class="prices-text">Giảm giá</span>
                                <span class="prices-value">0đ</span>
                            </li>
                        </ul>
                        <div class="prices-total pinside20">
                            <span class="price-text">Tổng cộng</span>
                            <span class="prices-value prices-final text-red">47.750.000đ</span>
                        </div>
                    </div>
                    <a href="checkout.html" class="btn-default btn-checkout">Mua Hàng</a>
                </div>
            </div>
        </div>
    </div>