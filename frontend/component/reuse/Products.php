<?php
$product_list = array(
    array('product-img' => 'product_img_1.png', 'product-title' => 'Google Pixel', 'product-price' => '$1100', 'discounted-price' => '$1400', 'offer-price' => '20%off'),
    array('product-img' => 'product_img_2.png', 'product-title' => 'HTC U Ultra', 'product-price' => '$1200', 'discounted-price' => '$1700', 'offer-price' => '10%off'),
    array('product-img' => 'product_img_3.png', 'product-title' => 'Samsung Galaxy Note 8', 'product-price' => '$2000', 'discounted-price' => '$2000', 'offer-price' => '20%off'),
    array('product-img' => 'product_img_3.png', 'product-title' => 'Samsung Galaxy Note 8', 'product-price' => '$2000', 'discounted-price' => '$2000', 'offer-price' => '20%off'),
    array('product-img' => 'product_img_4.png', 'product-title' => 'Vivo V5 Plus', 'product-price' => '$1500', 'discounted-price' => '$2000', 'offer-price' => '20%off'),
    array('product-img' => 'product_img_2.png', 'product-title' => 'HTC U Ultra', 'product-price' => '$1200', 'discounted-price' => '$1700', 'offer-price' => '10%off'),
    array('product-img' => 'product_img_2.png', 'product-title' => 'HTC U Ultra', 'product-price' => '$1200', 'discounted-price' => '$1700', 'offer-price' => '10%off'),
    array('product-img' => 'product_img_3.png', 'product-title' => 'Vivo V5 Plus', 'product-price' => '$1500', 'discounted-price' => '$2000', 'offer-price' => '20%off'),
    array('product-img' => 'product_img_2.png', 'product-title' => 'HTC U Ultra', 'product-price' => '$1200', 'discounted-price' => '$1700', 'offer-price' => '10%off')
);
?>
<div class="row">
    <?php
    foreach ($product_list as $product) {
        echo ('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
    <a href=' . $level . PAGES_PATH . 'product-single.php' . '>
        <div class="product-block">
            <div class="product-img"><img src=' . $level . IMG_PATH . $product['product-img'] . ' alt=""></div>
            <div class="product-content">
                <h5><a href="#" class="product-title">Google Pixel <strong>(128GB,
                            Black)</strong></a></h5>
                <div class="product-meta"><a href="#" class="product-price">' . $product['product-price'] . '</a>
                    <a href="#" class="discounted-price">' . $product['discounted-price'] . '</a>
                    <span class="offer-price">' . $product['offer-price'] . '</span>
                </div>
                <div class="shopping-btn">
                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                    <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </a>
</div>');
    }
    ?>
</div>