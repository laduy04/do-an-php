<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require($level . LIB_PATH . "meta.php");
    echo '<title>' . $page . '</title>';
    require($level . LIB_PATH . "css.php");
    ?>
</head>

<body>
    <?php
    if ($page == 'cart') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
        require($level . LIB_PATH . 'script.php');
        require($level . LIB_PATH . 'cart_script.php');
    } elseif ($page == 'product-list') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
        require($level . LIB_PATH . 'script.php');
        require($level . LIB_PATH . 'product-list_script.php');
    } elseif ($page == 'home') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
    } elseif ($page == 'detail') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
    } elseif ($page == 'signup') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
    } elseif ($page == 'login') {
        require($level . COMPONENTS_PATH . HEADER_PATH . 'header.php');
        require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
        require($level . COMPONENTS_PATH . FOOTER_PATH . 'footer.php');
    }
    ?>
</body>

</html>