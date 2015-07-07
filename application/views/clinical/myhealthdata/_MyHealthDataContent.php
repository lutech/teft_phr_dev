<div class="panel-group accordion accordion-semi " id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseOne">
                    Medications (0)
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <?php require 'sections/_Medications.php'; ?>
                <div class="controls text-center">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#editmycontact"><span class="glyphicon glyphicon-plus"></span> Add Important Contact</button>
                </div>
            </div><!-- /panel body-->
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseTwo">
                    Conditions/Problems (0)
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <?php require 'sections/_ConditionsAndProblems.php'; ?>
                <div class="controls text-center">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#editmycontact"><span class="glyphicon glyphicon-plus"></span> Add Doctor</button>
                </div>
            </div><!-- /panel body-->
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseThree">
                    Allergies (0)
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <?php require 'sections/_Allergies.php'; ?>
                <div class="controls text-center">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#editmycontact"><span class="glyphicon glyphicon-plus"></span> Add Family Member</button>
                </div>
            </div><!-- /panel body-->
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapseFour">
                    Assistive Devices (0)
                </a>
            </h4>
        </div><!-- /panel heading-->
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <?php require 'sections/_AssistiveDevices.php'; ?>
                <div class="controls text-center">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#editmycontact"><span class="glyphicon glyphicon-plus"></span> Add Family Member</button>
                </div>
            </div><!-- /panel body-->
        </div><!-- /panel collapse-->
    </div><!-- /panel -->
</div><!-- /panel group-->
	  