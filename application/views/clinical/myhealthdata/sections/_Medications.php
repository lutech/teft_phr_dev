<?php $medicationActions = '
    <a href="#editMedication" role="button" data-toggle="modal">
        <span class="fa fa-pencil"></span><span class="button-label">Edit</span>
    </a>
    <br/>
    <a href="#medicationInfo" role="button" data-toggle="modal">
        <span class="fa fa-info-circle"></span><span class="button-label">More Info</span>
    </a>
    <br/>
    <a href="#setReminder" role="button" data-toggle="modal">
        <span class="fa fa-calendar"></span><span class="button-label">Set Reminder</span>
    </a>
    <br/>
    <a href="#recordIntake" role="button" data-toggle="modal">
        <span class="fa fa-book"></span><span class="button-label">Log Intake</span>
    </a>
'?>


<div class="form-toolbar">
<ul class="nav nav-tabs flat-tabs">
    <li class="active">
        <a href="#activeMeds" data-toggle="tab">
            <span class="toolbar-button-label">Current</span>
        </a>
    </li>
    <li class="">
        <a href="#inactiveMeds" data-toggle="tab";>
        <span class="toolbar-button-label">Past</span>
        </a>
    </li>
</ul>
<div class="tab-content no-border no-box-shadow no-margin no-padding">
<div id="activeMeds" class="tab-pane active cont fade in app-block-list">
    <div class="row">
        <div class="col-sm-6 col-xs-5">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Medication Name</span>
                        <span class="app-read-data primary-data">Acebutolol</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Dosage</span>
                        <span class="app-read-data">200 <small class="text-muted">mg</small></span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Frequency</span>
                        <span class="app-read-data">Every 4 Hours</small></span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Route</span>
                        <span class="app-read-data">By Mouth/Oral</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Start Date</span>
                        <span class="app-read-data">5/15/2015</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">End Date</span>
                        <span class="app-read-data">--</span>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-sm-4 app-flat-well col-xs-5">
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Prescribed By</span>
                    <span class="app-read-data">
                        <div class="dropdown">
                            <a data-toggle="dropdown">Dr. Stewart Jennings <span class="fa fa-caret-down"></span></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>
                                    <a href="#viewMedicalContact"><span class="fa fa-user"></span>&nbsp;&nbsp;View Contact Info</a>
                                </li>
                                <li>
                                    <a href="#sendMessage"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Send a Message</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">Prescribed On</span>
                    <span class="app-read-data">5/15/2015</span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">ATC/NDC Code</span>
                    <span class="app-read-data">C07AB04</span>
                </small>
            </div>
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Reason Prescribed</span>
                    <span class="app-read-data">Hypertension.</span>
                </small>
            </div>
        </div>
        <div class="col-xs-2 text-right">
            <div class="text-left" style="display: inline-block">
                <?php echo $medicationActions ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-5">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Medication Name</span>
                        <span class="app-read-data primary-data">Lisinopril</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Dosage</span>
                        <span class="app-read-data">10 <small class="text-muted">mg</small></span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Frequency</span>
                        <span class="app-read-data">Once a Day</small></span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Route</span>
                        <span class="app-read-data">By Mouth/Oral</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Start Date</span>
                        <span class="app-read-data">5/15/2015</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">End Date</span>
                        <span class="app-read-data">--</span>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-sm-4 app-flat-well col-xs-5">
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Prescribed By</span>
                    <span class="app-read-data">
                        <div class="dropdown">
                            <a data-toggle="dropdown">Dr. Stewart Jennings <span class="fa fa-caret-down"></span></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>
                                    <a href="#viewMedicalContact"><span class="fa fa-user"></span>&nbsp;&nbsp;View Contact Info</a>
                                </li>
                                <li>
                                    <a href="#sendMessage"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Send a Message</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">Prescribed On</span>
                    <span class="app-read-data">5/15/2015</span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">ATC/NDC Code</span>
                    <span class="app-read-data">C09AA03</span>
                </small>
            </div>
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Reason Prescribed</span>
                    <span class="app-read-data">Hypertension.</span>
                </small>
            </div>
        </div>
        <div class="col-xs-2 text-right">
            <div class="text-left" style="display: inline-block">
                <?php echo $medicationActions ?>
            </div>
        </div>
    </div>
</div>
<div id="inactiveMeds" class="tab-pane cont fade app-block-list">
    <div class="row text-muted">
        <div class="col-sm-6 col-xs-5">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Medication Name</span>
                        <span class="app-read-data primary-data">Acebutolol</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Dosage</span>
                        <span class="app-read-data">200 <small class="text-muted">mg</small></span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Frequency</span>
                        <span class="app-read-data">Every 4 Hours</small></span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Route</span>
                        <span class="app-read-data">By Mouth/Oral</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Start Date</span>
                        <span class="app-read-data">3/2/2015</span>
                    </address>
                </div>
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">End Date</span>
                        <span class="app-read-data">4/25/2015</span>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-sm-4 app-flat-well col-xs-5">
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Prescribed By</span>
                    <span class="app-read-data">
                        <div class="dropdown">
                            <a data-toggle="dropdown">Dr. Stewart Jennings <span class="fa fa-caret-down"></span></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li>
                                    <a href="#viewMedicalContact"><span class="fa fa-user"></span>&nbsp;&nbsp;View Contact Info</a>
                                </li>
                                <li>
                                    <a href="#sendMessage"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Send a Message</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">Prescribed On</span>
                    <span class="app-read-data">3/02/2015</span>
                </small>
            </div>
            <div class="col-sm-6 no-padding">
                <small>
                    <span class="app-read-label">ATC/NDC Code</span>
                    <span class="app-read-data">C07AB04</span>
                </small>
            </div>
            <div class="col-sm-12 no-padding">
                <small>
                    <span class="app-read-label">Reason Prescribed</span>
                    <span class="app-read-data">Hypertension.</span>
                </small>
            </div>
        </div>
        <div class="col-xs-2 text-right">
            <div class="text-left" style="display: inline-block">
                <?php echo $medicationActions ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>