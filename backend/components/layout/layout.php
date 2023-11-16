<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require($level . LIB_PATH . 'meta.php');
    echo '<title>' . $page . '</title>';
    require($level . LIB_PATH . 'css.php')
    ?>
</head>

<body>
    <?php
    require($level . COMPONENTS_PATH . SIDEBAR_PATH . 'sidebar.php');
    require($level . COMPONENTS_PATH . CONTENT_PATH . 'content.php');
    require($level . LIB_PATH . 'script.php');
    ?>
</body>

</html>