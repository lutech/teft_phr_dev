<div class="col-md-12">
    <div class="form-toolbar">
        <!--        <ul class="nav nav-tabs flat-tabs">-->
        <!--            <li>-->
        <!--                <a href="#" aria-expanded="true">-->
        <!--                    <span class="fa fa-comment-o app-icon-report-problem fa-2x"></span>-->
        <!--                    <span class="toolbar-button-label">Report a Problem</span>-->
        <!--                </a>-->
        <!--            </li>-->
        <!--        </ul>-->

        <div class="block app-block app-heading-block">
            <div class="header">
                <h1><span class="fa fa-medkit"></span> Service Activities</h1>
            </div>
        </div>
        <div class="row app-flat-well no-margin app-toggle-panel">
            <div class="col-xs-12 no-padding panel-group accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#" href="#filter-serviceactivities" class="collapsed">
                                <span class="h4">
                                    <span class="fa fa-angle-left"></span>
                                    Filter
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="filter-serviceactivities" class="panel-collapse collapse">
                        <div class="panel-body app-block-list">
                            <fieldset class="">
                                <legend class="h5">Filter By:</legend>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="serviceType">Service Type:</label>
                                        <select type="search" id="serviceType" placeholder="mm/dd/yyyy" class="form-control input-small">
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>

                                        <div class="form-group">
                                            <label for="staffName">Staff Name:</label>
                                            <input type="search" id="staffName" placeholder="Name/ID" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
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
                                                <input type="checkbox" id="providerOnHold"/>
                                                <label for="providerOnHold">Provider On Hold</label>
                                            </div>
                                            <div class="">
                                                <input type="checkbox" id="dhmhOnHold"/>
                                                <label for="dhmhOnHold">DHMH On Hold</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr/>
                                    <button type="button" class="btn btn-primary">
                                        <span class="h5" data-toggle="collapse" data-parent="#" href="#filter-serviceactivities">apply</span>
                                    </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block app-block">
            <div class="content">
                <div id="service-activity-calendar"></div>
            </div>
            <p class="text-center"><strong class="h2">3</strong><span class="h3 text-muted"> - Monday</span></p>

            <div class="content no-padding">
                <?php require "_ServiceActivitiesContent.php" ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#service-activity-calendar').fullCalendar({
            //defaultView: 'agendaDay',
            contentHeight: 400
        });
    });
</script>