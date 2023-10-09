<div class="d-flex" id="wrapper">

    <div class="side-bar bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center"><b>Mobile Shop</b></div>
        <div class="profile">
            <div class="profile-pic">
                <img src=<?php echo $level . IMAGES_PATH . "admin.jpg" ?> alt="">
            </div>
            <div class="profile-info">
                <span>Welcome</span>
                <h5>Administrator</h5>
            </div>
        </div>
        <div class="list-group list-group-flush">
            <ul>
                <li>
                    <a href=<?php echo $level . "admin.php" ?> class="list-group-item list-group-item-action  
                    <?php if ($page == 'home') {
                        echo 'active';
                    } ?>"> Trang chủ <i class="menu-icon fa fa-laptop"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "dataUser.php" ?> class="list-group-item list-group-item-action  
                    <?php if ($page == 'data_user') {
                        echo 'active';
                    } ?>">
                        Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "dataProduct.php" ?> class="list-group-item list-group-item-action 
                    <?php if ($page == 'data_product') {
                        echo 'active';
                    } ?>">Thông tin sản phẩm <i class="menu-icon fas fa-mobile-alt font-list"></i></a>

                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "admin-manager-recipt.php" ?> class="list-group-item list-group-item-action 
                    <?php if ($page == 'admin-manager') {
                        echo 'active';
                    } ?>"> Quản lí đơn
                        hàng <i class="menu-icon fas fa-shopping-cart font-list"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "admin-branch.php" ?> class="list-group-item list-group-item-action
                    <?php if ($page == 'admin-branch') {
                        echo 'active';
                    } ?>"> Thông
                        tin
                        thương hiệu <i class="menu-icon fas fa-archway"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "admin-cancel-reciept.php" ?> class="list-group-item list-group-item-action 
                    <?php if ($page == 'admin-cancel-reciept') {
                        echo 'active';
                    } ?>"> Đơn
                        hàng bị hủy <i class="menu-icon fas fa-phone-slash"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "feedback.php" ?> class="list-group-item list-group-item-action 
                    <?php if ($page == 'feedback') {
                        echo 'active';
                    }  ?>"> Phản hồi khách hàng <i class="menu-icon far fa-paper-plane"></i></a>
                </li>
                <li>
                    <a href=<?php echo $level . PAGES_PATH . "admin-filter.php" ?> class="list-group-item list-group-item-action 
                    <?php if ($page == 'admin-filter') {
                        echo 'active';
                    } ?>">
                        Dữ liệu lọc <i class="menu-icon fas fa-filter"></i></a>
                </li>
            </ul>
        </div>
    </div>