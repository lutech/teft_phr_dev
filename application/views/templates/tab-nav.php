<ul id="secondaryNavigationMenu" class="nav navbar-nav no-margin">
<!--    <li>-->
<!--        <a href="#navigationModal" role="button" data-toggle="modal"><span class="fa fa-bars app-icon-circle fa-2x"></span></a>-->
<!--    </li>-->
    <li class="dropdown">
        <a role="button" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="fa fa-bars app-icon-circle fa-2x"></span></a>
        <ul class="dropdown-menu app-navigation-menu" style="background-color: #342851; width: 550px; max-height: 600px; overflow-y: auto">
            <?php require_once 'application/views/shared/modals/navigation/_ModalContent.php'; ?>
        </ul>
    </li>
</ul>
<ul id="primaryNavigationMenu" class="nav navbar-nav navbar-right no-margin">
    <?php require_once "application/views/home/shared/_TabNavigationPartial.php" ?>
    <li class="dropdown">
        <a role="button" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="fa fa-search app-icon-circle fa-2x"></span></a>
        <ul class="dropdown-menu app-navigation-menu" style="background-color: #342851;">
            <input type="text" value="search" class="form-control input-large"/>
        </ul>
    </li>
</ul>