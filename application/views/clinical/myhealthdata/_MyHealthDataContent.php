<div class="panel-group accordion accordion-semi " id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseOne">
                    <span class="fa fa-angle-right"></span>
                    Medications
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body no-padding">
                <?php require 'sections/_Medications.php'; ?>
            </div><!-- /panel body-->
            <hr/>
            <div class="controls text-center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newMedication"><span class="glyphicon glyphicon-plus"></span> Add Medication</button>
            </div>
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseTwo">
                    <span class="fa fa-angle-right"></span>
                    Conditions/Problems
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body no-padding">
                <?php require 'sections/_ConditionsAndProblems.php'; ?>
            </div><!-- /panel body-->
            <hr/>
            <div class="controls text-center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newCondition"><span class="glyphicon glyphicon-plus"></span> Add Condition/Problem</button>
            </div>
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseThree">
                    <span class="fa fa-angle-right"></span>
                    Allergies
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body no-padding">
                <?php require 'sections/_Allergies.php'; ?>
            </div><!-- /panel body-->
            <hr/>
            <div class="controls text-center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newAllergy"><span class="glyphicon glyphicon-plus"></span> Add Allergy</button>
            </div>
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseFour">
                    <span class="fa fa-angle-right"></span>
                    Medical/Assistive Devices
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body no-padding">
                <?php require 'sections/_AssistiveDevices.php'; ?>
            </div><!-- /panel body-->
            <hr/>
            <div class="controls text-center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newDevice"><span class="glyphicon glyphicon-plus"></span> Add Device</button>
            </div>
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
</div><!-- /panel group-->
	  