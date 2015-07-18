<div class="row">
    <div class="col-md-12">
        <div class="form-toolbar container tab-right">
            <ul class="nav nav-tabs flat-tabs">
                <li>
                    <span class="toolbar-button-label" style="padding: 5px; border-bottom: 1px solid #b5b5b5"><strong>Jump to a section...</strong></span>
                </li>
                <li class="active">
                    <a href="#reportingInformation" data-toggle="tab">
                        <span class="toolbar-button-label"><span class="fa fa-check-circle"></span> Reporting Information</span>
                    </a>
                </li>
                <li class="">
                    <a href="#eventInformation" data-toggle="tab";>
                    <span class="toolbar-button-label"><span class="fa fa-check-circle"></span> Event Information</span>
                    </a>
                </li>
                <li class="">
                    <a href="#allegedIncidents" data-toggle="tab">
                        <span class="toolbar-button-label"><span class="glyphicon glyphicon-adjust"></span> AllegedIncidents</span>
                    </a>
                </li>
                <li class="">
                    <a href="#complaint" data-toggle="tab">
                        <span class="toolbar-button-label"><span class="fa fa-circle-o"></span> Complaint</span>
                    </a>
                </li>
                <li class="">
                    <a href="#descriptionOfEventsAndResponse" data-toggle="tab">
                        <span class="toolbar-button-label"><span class="fa fa-circle-o"></span> Description of Event(s) and Response</span>
                    </a>
                </li>
                <li class="">
                    <a href="#attachments" data-toggle="tab">
                        <span class="toolbar-button-label"><span class="fa fa-paperclip"></span> Attachments (1)</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <form id="reportableEvent" class="panel-group accordion accordion-semi genericform-style pretty-form form-disabled">
                    <div id="reportingInformation"  class="tab-pane active cont fade in">
                        <?php require "sections/_ReportingInformation.php" ?>
                    </div>
                    <div id="eventInformation"  class="tab-pane cont fade">
                        <?php require "sections/_EventInformation.php" ?>
                    </div>
                    <div id="allegedIncidents"  class="tab-pane cont fade">
                        <?php require "sections/_AllegedIncidents.php" ?>
                    </div>
                    <div id="complaint"  class="tab-pane cont fade">
                        <?php require "sections/_Complaint.php" ?>
                    </div>
                    <div id="descriptionOfEventsAndResponse"  class="tab-pane cont fade">
                        <?php require "sections/_DescriptionOfEventAndResponse.php" ?>
                    </div>
                    <div id="attachments"  class="tab-pane cont fade no-padding">
                        <?php require "sections/_Attachments.php" ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>