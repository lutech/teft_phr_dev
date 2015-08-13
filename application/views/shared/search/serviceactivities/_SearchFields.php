<fieldset class="">
    <legend class="h4 text-center hidden">advanced search</legend>
    <div class="form-group">
        <label for="clientName">Client:</label>
        <input type="search" id="clientName" placeholder="Name/ID/MA#" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="staffName">Staff:</label>
        <input type="search" id="staffName" placeholder="Name/ID" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="serviceDate">Service Date:</label>
        <input type="search" id="serviceDate" placeholder="mm/dd/yyyy" class="form-control"/>
    </div>
    <div class="row no-margin">
        <label for="serviceType">Service Type:</label><br/>

        <div class="col-xs-6 no-padding">
            <div class="">
                <input type="checkbox" id="all"/>
                <label for="all">All</label>
            </div>
            <div class="">
                <input type="checkbox" id="new"/>
                <label for="new">Shared Attendant</label>
            </div>
        </div>
        <div class="col-xs-6 no-padding">
            <div class="">
                <input type="checkbox" id="pending"/>
                <label for="pending">Personal Assistance</label>
            </div>
        </div>
    </div>
    <br/>

    <div class="row no-margin">
        <label for="serviceType">Service Status:</label><br/>

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
    <br/>

    <div class="row no-margin">
        <label for="serviceType">Claim Status:</label><br/>

        <div class="col-xs-6 no-padding">
            <div class="">
                <input type="checkbox" id="all"/>
                <label for="all">All</label>
            </div>
            <div class="">
                <input type="checkbox" id="new"/>
                <label for="new">Submitted to MMIS</label>
            </div>
            <div class="">
                <input type="checkbox" id="pending"/>
                <label for="pending">Paid</label>
            </div>
        </div>
        <div class="col-xs-6 no-padding">
            <div class="">
                <input type="checkbox" id="ready"/>
                <label for="ready">Rejected</label>
            </div>
            <div class="">
                <input type="checkbox" id="closed"/>
                <label for="closed">Needs Authorization</label>
            </div>
        </div>
    </div>
    <hr/>
    <button type="button" class="btn btn-primary btn-block">
        <span class="h4">search <span class="fa fa-chevron-circle-right"></span></span>
    </button>
</fieldset>