<?php
require($level . COMPONENT_PATH . REUSE_PATH . 'CartHeader.php')
?>
<div class="container">
    <div class="cart-content mt30 mb30">
        <?php
        require($level . COMPONENT_PATH . REUSE_PATH . 'CartHeading.php');
        require($level . COMPONENT_PATH . REUSE_PATH . 'CartInfo.php');
        require($level . COMPONENT_PATH . REUSE_PATH . 'CartProducts.php');
        require($level . COMPONENT_PATH . REUSE_PATH . 'PricesSummary.php')
        ?>
    </div>
</div>