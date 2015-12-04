<div class="col-lg-1 col-md-0 col-xs-0"></div>
<div class="col-lg-2 col-md-3 col-xs-12 col-lg-pull-1 pull-right fixed-menu" style="border-left: 4px double #d7d7d7; padding-bottom: 50px;">
    <?php require_once 'application/views/templates/_ContextualNav.php'; ?>
</div>
<div class="col-lg-8 col-lg-pull-0 col-md-9 col-sm-12">
    <div class="container-fluid">
        <!-- Main Content -->
        <?php require "application/views/{$area}/{$page}.php"; ?>
    </div>
</div>