<div id="tab-nav" role="navigation">
    <ul id="tab-nav-list" class="row text-center">
        <?php
            if(!empty($tabnav)) {
                require 'application/views/'.$area.'/shared/_TabNavigationPartial.php';
            }
        ?>
    </ul>
</div>