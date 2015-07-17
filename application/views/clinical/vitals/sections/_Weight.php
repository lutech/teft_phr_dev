<?php $weightActions = '
    <div class="dropdown">
        <a data-toggle="dropdown">Actions <span class="fa fa-caret-down"></span></a>

        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="#editWeight"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
            </li>
            <hr class="no-margin"/>
            <li>
                <a href="#removeWeight"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
            </li>
        </ul>
    </div>
'?>

<div class="block">
    <div class="header no-border">
        <h2><span class="icon-scale"></span>&nbsp;Weight</h2>
    </div>
    <div class="content no-padding">
        <div class="row no-margin equal">
            <div class="col-md-6 no-padding">
                <div class="row no-margin">
                    <div class="col-md-12 no-padding">
                        <div class="blue-chart">
                            <div id="weightData" style="height:200px;"></div>
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
                                        174
                                        <small class="text-muted">lbs</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/21/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        173
                                        <small class="text-muted">lbs</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/28/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        174
                                        <small class="text-muted">lbs</small>
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
                                            174
                                            <small class="text-muted">lbs</small>
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
                                            173
                                            <small class="text-muted">lbs</small>
                                        </span>
                                        <span class="app-read-label no-margin">5/28/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Peak</span>
                                    <span class="h5">
                                        <span class="app-read-data">
                                            175
                                            <small class="text-muted">lbs</small>
                                        </span>
                                        <span class="app-read-label no-margin">04/24/2015</span>
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
                        <th>Last 5</th>
                        <th>Source</th>
                        <th>Weight</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <tr>
                        <td>06/10/2015</td>
                        <td>Dr. Paulsen</td>
                        <td>174<small class="text-muted">&nbsp;lbs</small></td>
                        <td>
                            <?php echo $weightActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/28/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>173<small class="text-muted">&nbsp;lbs</small></td>
                        <td>
                            <?php echo $weightActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/21/2015</td>
                        <td>Manually Entered</td>
                        <td>174<small class="text-muted">&nbsp;lbs</small></td>
                        <td>
                            <?php echo $weightActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/01/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>174<small class="text-muted">&nbsp;lbs</small></td>
                        <td>
                            <?php echo $weightActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>04/24/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>175<small class="text-muted">&nbsp;lbs</small></td>
                        <td>
                            <?php echo $weightActions ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="app-block-controls text-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newWeight">
                        <span class="glyphicon glyphicon-plus"></span> Add Weight
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>