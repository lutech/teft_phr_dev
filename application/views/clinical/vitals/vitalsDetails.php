<div class="col-md-12">
    <div class="form-toolbar container">
        <ul class="nav nav-tabs flat-tabs">
            <li class="">
                <a href="#" aria-expanded="false">
                    <span class="fa fa-print fa-2x"></span>
                    <span class="toolbar-button-label">Print</span>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <span class="fa fa-share fa-2x"></span>
                    <span class="toolbar-button-label">Share</span>
                </a>
            </li>
        </ul>
        <div class="block app-block app-heading-block">
            <div class="header">
                <h1><span class="fa fa-heartbeat"></span> Vitals</h1>
            </div>
        </div>
    </div>
    <div class="content">
        <?php require "_VitalsContent.php" ?>
    </div>
</div>


<!-- Modals-->
<?php require_once 'shared/modals/bloodglucose/_Modal.php'; ?>
<?php require_once 'shared/modals/bloodpressure/_Modal.php'; ?>
<?php require_once 'shared/modals/heartrate/_Modal.php'; ?>
<?php require_once 'shared/modals/respiratoryrate/_Modal.php'; ?>
<?php require_once 'shared/modals/weight/_Modal.php'; ?>


<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.dashboard();
        });

    </script>
'?>