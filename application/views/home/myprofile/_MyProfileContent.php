<div class="block">
    <div class="content">
        <?php require 'sections/_AccountInformation.php'; ?>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#myprofile-2" class="collapsed">
                <span class="fa fa-angle-right"></span>
                Additional Information
            </a>
        </h4>
    </div>
    <div id="myprofile-2" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_AdditionalInformation.php'; ?>
        </div>
    </div>
</div>
<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title">-->
<!--            <a data-toggle="collapse" data-parent="#myprofile" href="#myprofile-1" class="collapsed">-->
<!--                <span class="fa fa-angle-right"></span>-->
<!--                Jurisdiction-->
<!--            </a>-->
<!--        </h4>-->
<!--    </div>-->
<!--    <div id="myprofile-1" class="panel-collapse collapse">-->
<!--        <div class="panel-body">-->
<!--            --><?php //require 'sections/_Jurisdiction.php'; ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="panel panel-default">
<!--    <div class="panel-heading">-->
<!--        <h4 class="panel-title">-->
<!--            <a data-toggle="collapse" data-parent="#" href="#myprofile-3" class="collapsed">-->
<!--                <span class="fa fa-angle-right"></span>-->
<!--                Identifiers-->
<!--            </a>-->
<!--        </h4>-->
<!--    </div>-->
    <div id="myprofile-3" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_Identifiers.php'; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#myprofile-6" class="collapsed">
                <span class="fa fa-angle-right"></span>
                Address
            </a>
    </div>
    <div id="myprofile-6" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_Address.php'; ?>
        </div>
        <hr/>
        <div class="controls text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newAddress"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Address</button>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#myprofile-4" class="collapsed">
                <span class="fa fa-angle-right"></span>
                Phone
            </a>
    </div>
    <div id="myprofile-4" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_Phone.php'; ?>
        </div>
        <hr/>
        <div class="controls text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newPhone"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Phone Number</button>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#myprofile-5" class="collapsed">
                <span class="fa fa-angle-right"></span>
                Email
            </a>
    </div>
    <div id="myprofile-5" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_Email.php'; ?>
        </div>
        <hr/>
        <div class="controls text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newEmail"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Email</button>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#myprofile-7" class="collapsed">
                <span class="fa fa-angle-right"></span>
                Login Information
            </a>
    </div>
    <div id="myprofile-7" class="panel-collapse collapse">
        <div class="panel-body app-block-list no-padding">
            <?php require 'sections/_LoginInformation.php'; ?>
        </div>
    </div>
</div>
