<div class="col-lg-1 col-md-0 col-xs-0"></div>
<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="form-toolbar">
        <div class="tab-content no-box-shadow" style="background: #E4E4E4; border-top: 1px solid #C9C9C9;">
            <fieldset class="">
                <legend class="h4 text-center">advanced search</legend>
                <div class="form-group">
                    <label for="clientName">Client:</label>
                    <input type="search" id="clientName" placeholder="Name/ID/MA#" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="serviceDate">Service Date:</label>
                    <input type="search" id="serviceDate" placeholder="mm/dd/yyyy" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="serviceType">Service Type:</label>
                    <input type="search" id="serviceType" placeholder="mm/dd/yyyy" class="form-control"/>
                </div>
                <div class="row no-margin">
                    <label for="serviceType">Status:</label><br/>

                    <div class="col-xs-6 no-padding">
                        <div class="">
                            <input type="checkbox" id="all"/>
                            <label for="all">All</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="new"/>
                            <label for="new">New</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="pending"/>
                            <label for="pending">Pending</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="ready"/>
                            <label for="ready">Ready</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="closed"/>
                            <label for="closed">Closed</label>
                        </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="">
                            <input type="checkbox" id="needsAuthorization"/>
                            <label for="needsAuthorization">Needs Authorization</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="notAuthorized"/>
                            <label for="notAuthorized">Not Authorized</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="discarded"/>
                            <label for="discarded">Discarded</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="providerOnHold"/>
                            <label for="providerOnHold">Provider On Hold</label>
                        </div>
                        <div class="">
                            <input type="checkbox" id="dhmhOnHold"/>
                            <label for="dhmhOnHold">DHMH On Hold</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="staffName">Staff Name:</label>
                    <input type="search" id="staffName" placeholder="Name/ID" class="form-control"/>
                </div>
                <hr/>
                <button type="button" class="btn btn-primary btn-block"><span class="h4">search <span class="fa fa-chevron-circle-right"></span></span></button>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-lg-7 col-lg-pull-0 col-md-9 col-sm-12">
    <div class="tab-pane active cont fade in app-block-list container-fluid">
        <div class="row">
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Client</span>
                        <span class="app-read-data primary-data">Cicio Smith</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">ID#</span>
                        <span class="app-read-data">234863516846314</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="col-sm-12">
                    <address>
                        <span class="app-read-label">Medicaid #</span>
                        <span class="app-read-data">598742368</span>
                    </address>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-8 no-padding">
                    <div class="content blue-chart">
                        <div id="serviceActivities1" style="height:152px;"></div>
                    </div>
                </div>
                <div class="col-sm-4 no-padding">
                </div>
            </div>
        </div>
    </div>
</div>