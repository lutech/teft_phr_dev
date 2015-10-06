<div class="form-toolbar">
    <ul class="nav nav-tabs flat-tabs">
        <li class="">
            <a href="#" data-trigger-form-unlock="#myprofile" aria-expanded="false";>
            <span class="fa  fa-comment-o app-icon-report-problem fa-2x"></span>
            <span class="toolbar-button-label">Report an Event</span>
            </a>
        </li>
    </ul>
    <div class="block app-block app-heading-block">
        <div class="header">
            <h1><span class="fa fa-bullhorn"></span> Reportable Events</h1>
        </div>
    </div>
</div>
<?php $reportableEventActions = '
            <a href="'.base_url().'index.php/client/reportableevents/details" role="button" data-toggle="modal"><span class="fa fa-arrow-circle-right"></span>&nbsp;&nbsp;View</a>
            <br/>
            <a href="#removeBloodGlucose" role="button" data-toggle="modal"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
'?>
<div class="form-toolbar">
    <ul class="nav nav-tabs flat-tabs">
        <li class="active">
            <a href="#allLabResults" data-toggle="tab">
                <span class="toolbar-button-label">All</span>
            </a>
        </li>
        <li class="">
            <a href="#labResultsPastMonth" data-toggle="tab";>
            <span class="toolbar-button-label">Active</span>
            </a>
        </li>
        <li class="">
            <a href="#pendingLabResults" data-toggle="tab";>
            <span class="toolbar-button-label">Pending</span>
            </a>
        </li>
        <li class="">
            <a href="#completedLabResults" data-toggle="tab";>
            <span class="toolbar-button-label">Inactive</span>
            </a>
        </li>
    </ul>
    <div class="tab-content no-border no-box-shadow no-margin no-padding">
        <div id="allLabResults" class="tab-pane active cont fade in app-block-list no-max-height">

            <table class="app-table">
                <thead>
                <tr>
                    <th>
                        Last Modified By
                    </th>
                    <th>
                        Last Modified Date
                    </th>
                    <th>
                        Submission Date
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Active/Inactive
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Casey Monroe
                    </td>
                    <td>
                        05/11/2014
                    </td>
                    <td>
                        05/12/2014
                    </td>
                    <td>
                        Submitted
                    </td>
                    <td>
                        Pending
                    </td>
                    <td>
                        <?php echo $reportableEventActions ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="labResultsPastMonth" class="tab-pane cont fade app-block-list no-max-height">
            <div class="row text-muted text-center">
                <div class="col-md-12">
                    <span class="h3">
                            No data to display
                    </span>
                </div>
            </div>
        </div>
        <div id="pendingLabResults" class="tab-pane cont fade app-block-list no-max-height">

            <table class="">
                <thead>
                <tr>
                    <th>
                        Last Modified By
                    </th>
                    <th>
                        Last Modified Date
                    </th>
                    <th>
                        Submission Date
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Active/Inactive
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Casey Monroe
                    </td>
                    <td>
                        05/11/2014
                    </td>
                    <td>
                        05/12/2014
                    </td>
                    <td>
                        Submitted
                    </td>
                    <td>
                        Pending
                    </td>
                    <td>
                        <?php echo $reportableEventActions ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="completedLabResults" class="tab-pane cont fade app-block-list">
            <div class="row text-muted text-center">
                <div class="col-md-12">
                    <span class="h3">
                            No data to display
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>