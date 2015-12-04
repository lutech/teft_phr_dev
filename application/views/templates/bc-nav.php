<div id="bc-nav" class="page-head" role="navigation">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-md-push-3">
            <div class="container-fluid">
                <?php require "application/views/templates/_PageHeadingPartial.php"; ?>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 no-padding col-md-pull-6">
            <div class="container-fluid">
                <?php

                if (isset($contextualnav)) {
                    if( file_exists('application/views/'.$area.'/'.$contextualnav.'/shared/contextualnav/_BackLink.php')) {
                        require 'application/views/templates/contextualnav/backlink.php';
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-xs-6">
            <div class="container-fluid">
            </div>
        </div>
    </div>
</div>

