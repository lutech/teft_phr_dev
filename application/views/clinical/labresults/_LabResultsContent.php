<?php $labResultsActions = '
    <div class="dropdown">
        <a data-toggle="dropdown">Actions <span class="fa fa-caret-down"></span></a>

        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="#editBloodGlucose" role="button" data-toggle="modal"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
            </li>
            <hr class="no-margin"/>
            <li>
                <a href="#removeBloodGlucose" role="button" data-toggle="modal"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
            </li>
        </ul>
    </div>
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
        <span class="toolbar-button-label">Past Month</span>
        </a>
    </li>
    <li class="">
        <a href="#pendingLabResults" data-toggle="tab";>
        <span class="toolbar-button-label">Pending</span>
        </a>
    </li>
    <li class="">
        <a href="#completedLabResults" data-toggle="tab";>
        <span class="toolbar-button-label">Completed</span>
        </a>
    </li>
</ul>
<div class="tab-content no-border no-box-shadow no-margin no-padding">
<div id="allLabResults" class="tab-pane active cont fade in app-block-list no-max-height">
    <table class="app-block-table">
        <thead>
        <tr>
            <th>
                Test Name
            </th>
            <th>
                Ordered By
            </th>
            <th>
                Date Ordered
            </th>
            <th>
                Status
            </th>
            <th>
                Results
            </th>
            <th>
                Source
            </th>
            <th width="80px";>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                CBC
            </td>
            <td>
                Greggory Jones
            </td>
            <td>
                05/10/2015
            </td>
            <td>
                Pending
            </td>
            <td>
                --
            </td>
            <td>
                Good Health Labs
            </td>
            <td>
                <?php echo $labResultsActions ?>
            </td>
        </tr>
        <tr>
            <td>
                Cholestorol
            </td>
            <td>
                Mary Watkins
            </td>
            <td>
                01/30/2015
            </td>
            <td>
                Completed
            </td>
            <td>
                lorem ipsum.
            </td>
            <td>
                Good Health Labs
            </td>
            <td>
                <?php echo $labResultsActions ?>
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
    <table class="app-table">
        <thead>
        <tr>
            <th>
                Test Name
            </th>
            <th>
                Ordered By
            </th>
            <th>
                Date Ordered
            </th>
            <th>
                Source
            </th>
            <th width="80px";>
            Actions
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                CBC
            </td>
            <td>
                Greggory Jones
            </td>
            <td>
                05/10/2015
            </td>
            <td>
                Good Health Labs
            </td>
            <td>
                <?php echo $labResultsActions ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="completedLabResults" class="tab-pane cont fade app-block-list">
    <table class="app-table">
        <thead>
        <tr>
            <th>
                Test Name
            </th>
            <th>
                Ordered By
            </th>
            <th>
                Date Ordered
            </th>
            <th>
                Results
            </th>
            <th>
                Source
            </th>
            <th width="80px";>
            Actions
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Cholestorol
            </td>
            <td>
                Mary Watkins
            </td>
            <td>
                01/30/2015
            </td>
            <td>
                lorem ipsum.
            </td>
            <td>
                Good Health Labs
            </td>
            <td>
                <?php echo $labResultsActions ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</div>
