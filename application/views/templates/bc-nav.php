<div id="bc-nav" class="page-head role="navigation">
    <div class="container">
        <h2><?php echo $pagename ?></h2>
        <ol class="breadcrumb">
            <?php
            if(!empty($bcnav)) {
                require 'application/views/'.$area.'/shared/_BreadCrumbNavigationPartial.php';
            }
            ?>
        </ol>
    </div>
</div>