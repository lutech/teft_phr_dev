<div class="row">
    <div class="col-md-12">
        <div class="form-toolbar container tab-right">
            <ul class="nav nav-tabs flat-tabs">
                <li>
                    <span class="toolbar-button-label" style="padding: 5px; border-bottom: 1px solid #b5b5b5; text-transform: uppercase">Form Menu</span>
                </li>
                <li class="active">
                    <a href="#I-AdministrativeItems" data-toggle="tab">
                        <span class="toolbar-button-label">Overview Information</span>
                    </a>
                </li>
                <li class="">
                    <a href="#II-AdmissionInformation" data-toggle="tab";>
                    <span class="toolbar-button-label">Strengths</span>
                    </a>
                </li>
                <li class="">
                    <a href="#III-CurrentMedicalInformation" data-toggle="tab">
                        <span class="toolbar-button-label">Goals</span>
                    </a>
                </li>
                <li class="">
                    <a href="#IV-CognitiveStatusMoodAndPain" data-toggle="tab">
                        <span class="toolbar-button-label">Risks</span>
                    </a>
                </li>
                <li class="">
                    <a href="#V-Impairments" data-toggle="tab">
                        <span class="toolbar-button-label">Self-Direction</span>
                    </a>
                </li>
                <li class="">
                    <a href="#VI-FunctionalStatus" data-toggle="tab">
                        <span class="toolbar-button-label">Emergency Backup Plans</span>
                    </a>
                </li>
                <li class="">
                    <a href="#VII-OverallPOC" data-toggle="tab">
                        <span class="toolbar-button-label">Services</span>
                    </a>
                </li>
                <li class="">
                    <a href="#IX-ICD9CodingInformation" data-toggle="tab">
                        <span class="toolbar-button-label">Signatures</span>
                    </a>
                </li>
                <li class="">
                    <a href="#X-OtherUsefulInformation" data-toggle="tab">
                        <span class="toolbar-button-label">Review</span>
                    </a>
                </li>
                <li class="">
                    <a href="#XI-Feedback" data-toggle="tab">
                        <span class="toolbar-button-label">Decision</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <form id="careAssessment" class="panel-group accordion accordion-semi genericform-style pretty-form form-disabled">
                    <div id="I-AdministrativeItems"  class="tab-pane active cont fade in">
                        <?php require "sections/_I-AdministrativeItems.php" ?>
                    </div>
                    <div id="II-AdmissionInformation"  class="tab-pane cont fade">
                        <?php require "sections/_II-AdmissionInformation.php" ?>
                    </div>
                    <div id="III-CurrentMedicalInformation"  class="tab-pane cont fade">
                        <?php require "sections/_III-CurrentMedicalInformation.php" ?>
                    </div>
                    <div id="IV-CognitiveStatusMoodAndPain"  class="tab-pane cont fade">
                        <?php require "sections/_IV-CognitiveStatusMoodAndPain.php" ?>
                    </div>
                    <div id="V-Impairments"  class="tab-pane cont fade">
                        <?php require "sections/_V-Impairments.php" ?>
                    </div>
                    <div id="VI-FunctionalStatus"  class="tab-pane cont fade">
                        <?php require "sections/_VI-FunctionalStatus.php" ?>
                    </div>
                    <div id="VII-OverallPOC"  class="tab-pane cont fade">
                        <?php require "sections/_VII-OverallPOC.php" ?>
                    </div>
                    <div id="IX-ICD9CodingInformation"  class="tab-pane cont fade">
                        <?php require "sections/_IX-ICD9CodingInformation.php" ?>
                    </div>
                    <div id="X-OtherUsefulInformation"  class="tab-pane cont fade">
                        <?php require "sections/_X-OtherUsefulInformation.php" ?>
                    </div>
                    <div id="XI-Feedback"  class="tab-pane cont fade">
                        <?php require "sections/_XI-Feedback.php" ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>