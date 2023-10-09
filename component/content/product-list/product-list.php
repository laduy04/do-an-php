<div class="content">
    <div class="container">
        <div class="row">
            <?php
            require($level . COMPONENT_PATH . REUSE_PATH . 'Filter.php')
            ?>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <?php
                require($level . COMPONENT_PATH . REUSE_PATH . 'Sort.php');
                require($level . COMPONENT_PATH . REUSE_PATH . 'Products.php');
                require($level . COMPONENT_PATH . REUSE_PATH . 'Pagination.php')
                ?>
            </div>
        </div>
    </div>
</div>
</div>