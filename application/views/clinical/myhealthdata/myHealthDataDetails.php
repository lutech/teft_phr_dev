<div class="col-md-12">
    <div class="form-toolbar">
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
            <li class="" style="float: right">
                <a href="#" aria-expanded="false">
                    <span class="fa fa-angle-double-down fa-2x"></span>
                    <span class="toolbar-button-label">Expand All</span>
                </a>
            </li>
        </ul>
        <div class="block app-block app-heading-block">
            <div class="header">
                <h1><span class="fa fa-stethoscope"></span> My Health Data</h1>
            </div>
        </div>
    </div>
    <div class="content">
        <div id="myhealthdata" class="panel-group accordion accordion-semi pretty-form form-disabled">
            <?php require "_MyHealthDataContent.php" ?>
        </div>
    </div>
</div>


<!-- Modals-->
<?php require_once 'shared/_EditMedication.php'; ?>
<?php require_once 'shared/_EditCondition.php'; ?>
<?php require_once 'shared/_EditAllergy.php'; ?>
<?php require_once 'shared/_EditDevice.php'; ?>

<?php require_once 'shared/_NewMedication.php'; ?>
<?php require_once 'shared/_NewCondition.php'; ?>
<?php require_once 'shared/_NewAllergy.php'; ?>
<?php require_once 'shared/_NewDevice.php'; ?>

<?php require_once 'shared/_MedicationInfo.php'; ?>
<?php require_once 'shared/_ConditionInfo.php'; ?>
<?php require_once 'shared/_AllergyInfo.php'; ?>

<?php require_once 'shared/_ViewMedicalContact.php'; ?>
<?php require_once 'shared/_CreateContact.php'; ?>
<?php require_once 'shared/_SendMessage.php'; ?>
<?php require_once 'shared/_SetReminder.php'; ?>
