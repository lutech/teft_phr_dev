<ul class="container-fluid app-navigation-menu">
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header"><span class="h4 text-muted">My Portal</span></li>
            <?php require_once "application/views/home/shared/_myPortalTabNavigation.php" ?>
        </ul>
    </li>
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header"><span class="h4 text-muted">Clinical</span></li>
            <?php require_once "application/views/clinical/shared/_TabNavigationPartial.php" ?>
        </ul>
    </li>
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header"><span class="h4 text-muted">Billing</span></li>
            <?php require_once "application/views/billing/shared/_TabNavigationPartial.php" ?>
        </ul>
    </li>
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header"><span class="h4 text-muted">LTSS</span></li>
            <?php require_once "application/views/ltss/shared/_TabNavigationPartial.php" ?>
        </ul>
    </li>
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header"><span class="h4 text-muted">Help & Support</span></li>
            <?php require_once "application/views/helpandinfo/shared/_TabNavigationPartial.php" ?>
        </ul>
    </li>
    <li class="row">
        <ul class="col-xs-12">
            <li class="col-xs-12 menu-header" style="background-color: #AF1717"><span class="h4 text-muted">Emergency</span></li>
            <?php require_once "application/views/emergency/shared/_TabNavigationPartial.php" ?>
        </ul>
    </li>
</ul>