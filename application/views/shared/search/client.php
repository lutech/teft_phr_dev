<div class="col-lg-1 col-md-0 col-xs-0"></div>
<div class="col-lg-3 col-md-3 col-sm-12 no-padding">
    <div class="form-toolbar">
        <div class="tab-content no-box-shadow" style="background: #E4E4E4; border-top: 1px solid #C9C9C9;">
            <fieldset class="">
                <legend class="h4 text-center">advanced search</legend>
                <div class="form-group">
                    <label for="clientName">Client:</label>
                    <input type="search" id="clientName" placeholder="Name/ID" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="ssn">SSN #</label>
                    <input type="search" id="ssn" placeholder="eg., 123-45-6789" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="medicaid">Medicaid #</label>
                    <input type="search" id="medicaid" placeholder="eg., 123456789" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="search" id="dob" placeholder="mm/dd/yyyy" class="form-control date"/>
                </div>
                <div class="form-group">
                    <label for="jurisdiction">Jurisdiction</label>
                    <select id="jurisdiction" class="form-control">
                        <option value="0"></option>
                        <option value="1">Annapolis</option>
                        <option value="2">Baltimore</option>
                    </select>
                </div>
                <hr/>
                <button type="button" class="btn btn-primary btn-block">
                    <span class="h4">search <span class="fa fa-chevron-circle-right"></span></span>
                </button>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-lg-7 col-lg-pull-0 col-md-9 col-sm-12 no-padding" style="border-top: 1px solid #C9C9C9">
<div class="col-xs-12">
<br/>

<div class="block">
<div class="tab-pane active cont fade in app-block-list container-fluid" style="max-height: none">
<div class="row">
    <div class="col-xs-10">
        <div class="col-xs-12 no-padding">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">Client</span>
                        <span class="app-read-data primary-data">Smith, Cicio</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">SSN #</span>
                        <span class="app-read-data">***-**-5555</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">Medicaid #</span>
                        <span class="app-read-data">598742368</span>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-xs-12 app-flat-well">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">Date of Birth</span>
                        <span class="app-read-data">01/01/1950</span>
                    </small>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">ID#</span>
                        <span class="app-read-data">234863516846314</span>
                    </small>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">Jurisdiction</span>
                        <span class="app-read-data">Baltimore</span>
                    </small>
                </div>
            </div>
            <div class="col-xs-12 app-toggle-panel">
                <div class="panel-group accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#" href="#profile-1" class="collapsed">
                                    <span class="fa fa-angle-left"></span>
                                    additional info
                                </a>
                            </h4>
                        </div>
                        <div id="profile-1" class="panel-collapse collapse">
                            <div class="panel-body app-block-list no-padding">
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Facility Name</span>
                                            <span class="app-read-data">New Haven</span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Address</span>
                                                            <span class="app-read-data">123 Main Street
                                                                <br/>
                                                                Baltimore, Md 21000</span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Phone</span>
                                            <span class="app-read-data">(123) 456-7890</span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 text-right">
        <div class="text-left" style="display: inline-block">

            <a href="#editMedication" role="button" data-toggle="modal">
                <span class="fa fa-user"></span><span class="button-label">Profile</span>
            </a>
            <br>
            <a href="#medicationInfo" role="button" data-toggle="modal">
                <span class="fa fa-envelope"></span><span class="button-label">Message</span>
            </a>
            <br>
            <a href="#setReminder" role="button" data-toggle="modal">
                <span class="fa fa-medkit"></span><span class="button-label">Services</span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-10">
        <div class="col-xs-12 no-padding">

            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">Client</span>
                        <span class="app-read-data primary-data">Smith, David</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">SSN #</span>
                        <span class="app-read-data">***-**-6644</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <address>
                        <span class="app-read-label">Medicaid #</span>
                        <span class="app-read-data">985632147</span>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-xs-12 app-flat-well">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">Date of Birth</span>
                        <span class="app-read-data">02/02/1951</span>
                    </small>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">ID#</span>
                        <span class="app-read-data">684368484184185</span>
                    </small>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12 no-padding">
                    <small>
                        <span class="app-read-label">Jurisdiction</span>
                        <span class="app-read-data">Baltimore</span>
                    </small>
                </div>
            </div>
            <div class="col-xs-12 app-toggle-panel">
                <div class="panel-group accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#" href="#profile-2" class="collapsed">
                                    <span class="fa fa-angle-left"></span>
                                    additional info
                                </a>
                            </h4>
                        </div>
                        <div id="profile-2" class="panel-collapse collapse">
                            <div class="panel-body app-block-list no-padding">
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Facility Name</span>
                                            <span class="app-read-data">Greater Dawn</span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Address</span>
                                                        <span class="app-read-data">566 Fair Street
                                                            <br/>
                                                            Baltimore, Md 21000</span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-sm-4 no-padding">
                                    <div class="col-sm-12 no-padding">
                                        <small>
                                            <span class="app-read-label">Phone</span>
                                            <span class="app-read-data">(321) 654-0987</span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 text-right">
        <div class="text-left" style="display: inline-block">

            <a href="#editMedication" role="button" data-toggle="modal">
                <span class="fa fa-user"></span><span class="button-label">Profile</span>
            </a>
            <br>
            <a href="#medicationInfo" role="button" data-toggle="modal">
                <span class="fa fa-envelope"></span><span class="button-label">Message</span>
            </a>
            <br>
            <a href="#setReminder" role="button" data-toggle="modal">
                <span class="fa fa-medkit"></span><span class="button-label">Services</span>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
