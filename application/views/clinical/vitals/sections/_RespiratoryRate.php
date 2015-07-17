<?php $heartRateActions = '
    <div class="dropdown">
        <a data-toggle="dropdown">Actions <span class="fa fa-caret-down"></span></a>

        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="#editRespiratoryRate"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
            </li>
            <hr class="no-margin"/>
            <li>
                <a href="#removeRespiratoryRate"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
            </li>
        </ul>
    </div>
'?>

<div class="block">
    <div class="header no-border">
        <h2><span class="icon-lungs"></span>&nbsp;Respiratory Rate</h2>
    </div>
    <div class="content no-padding">
        <div class="row no-margin equal">
            <div class="col-md-6 no-padding">
                <div class="row no-margin">
                    <div class="col-md-12 no-padding">
                        <div class="blue-chart">
                            <div id="respiratoryRate" style="height:200px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col-xs-12">
                        <h4>Last 3 Records</h4>

                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        15
                                        <small class="text-muted">breaths/min</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/21/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        15
                                        <small class="text-muted">breaths/min</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/28/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        14
                                        <small class="text-muted">breaths/min</small>
                                    </span>
                                </span>
                                <span class="app-read-label">6/10/2015</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col-xs-12">
                        <hr/>
                        <span class="h4 text-muted">Stats</span>
                        <div class="row no-margin app-flat-well">
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Average</span>
                                    <span class="h5">
                                        <span class="app-read-data">
                                            14
                                            <small class="text-muted">breaths/min</small>
                                        </span>
                                        <span class="app-read-label no-margin">4/24/2015 - 6/10/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Base</span>
                                    <span class="h5">
                                        <span class="app-read-data">
                                            13
                                            <small class="text-muted">breaths/min</small>
                                        </span>
                                        <span class="app-read-label no-margin">5/01/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Peak</span>
                                    <span class="h5">
                                        <span class="app-read-data">
                                            15
                                            <small class="text-muted">breaths/min</small>
                                        </span>
                                        <span class="app-read-label no-margin">5/28/2015</span>
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-6 no-padding" style="border-left: 1px solid #EEE !important;">
                <table class="blue app-block-table">
                    <thead>
                    <tr>
                        <th>Date Observed</th>
                        <th>Source</th>
                        <th>Result</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <tr>
                        <td>06/10/2015</td>
                        <td>Dr. Paulsen</td>
                        <td>14
                            <small class="text-muted">&nbsp;breaths/min</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/28/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>15
                            <small class="text-muted">&nbsp;breaths/min</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/21/2015</td>
                        <td>Manually Entered</td>
                        <td>15
                            <small class="text-muted">&nbsp;breaths/min</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/01/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>13
                            <small class="text-muted">&nbsp;breaths/min</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>04/24/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>14
                            <small class="text-muted">&nbsp;breaths/min</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="app-block-controls text-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newRespiratoryRate">
                        <span class="glyphicon glyphicon-plus"></span> Add Respiratory Rate
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>