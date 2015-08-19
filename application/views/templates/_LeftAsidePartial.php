<?php
require_once "application/views/templates/menuItem_builder.php";
?>
<div class="row app-left-aside no-padding no-margin">
    <div class="container-fluid no-padding no-margin">
        <?php
            if( file_exists('application/views/'.$area.'/'.$page.'/shared/_LeftAsideContent.php')) {
                require 'application/views/'.$area.'/'.$page.'/shared/_LeftAsideContent.php';
            }
        ?>
    </div>
</div>