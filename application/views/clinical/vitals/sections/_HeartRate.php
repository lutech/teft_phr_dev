<?php $heartRateActions = '
    <div class="dropdown">
        <a data-toggle="dropdown">Actions <span class="fa fa-caret-down"></span></a>

        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="#editHeartRate" role="button" data-toggle="modal"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
            </li>
            <hr class="no-margin"/>
            <li>
                <a href="#removeHeartRate" role="button" data-toggle="modal"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
            </li>
        </ul>
    </div>
'?>

<div class="block">
    <div class="header no-border">
        <h2><span class="fa fa-heartbeat"></span>&nbsp;Heart Rate</h2>
    </div>
    <div class="content no-padding">
        <div class="row no-margin equal">
            <div class="col-md-6 no-padding">
                <div class="row no-margin">
                    <div class="col-md-12 no-padding">
                        <div class="red-chart">
                            <div id="heartRateChart" style="height:200px;"></div>
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
                                        72
                                        <small class="text-muted">bpm</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/21/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        70
                                        <small class="text-muted">bpm</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5/28/2015 <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        72
                                        <small class="text-muted">bpm</small>
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
                                        <span class="app-read-data no-margin">
                                            72
                                            <small class="text-muted">bpm</small>
                                        </span>
                                        <span class="app-read-label no-margin">4/24/15 - 6/10/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Base</span>
                                    <span class="h5">
                                        <span class="app-read-data no-margin">
                                            65
                                            <small class="text-muted">bpm</small>
                                        </span>
                                        <span class="app-read-label no-margin">5/28/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Peak</span>
                                    <span class="h5">
                                        <span class="app-read-data no-margin">
                                            78
                                            <small class="text-muted">bpm</small>
                                        </span>
                                        <span class="app-read-label no-margin">6/10/2015</span>
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-6 no-padding" style="border-left: 1px solid #EEE !important;">
                <table class="red app-block-table">
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
                        <td>72
                            <small class="text-muted">&nbsp;BPM</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/28/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>68
                            <small class="text-muted">&nbsp;BPM</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/21/2015</td>
                        <td>Manually Entered</td>
                        <td>69
                            <small class="text-muted">&nbsp;BPM</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>05/01/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>71
                            <small class="text-muted">&nbsp;BPM</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>04/24/2015</td>
                        <td>Cardiology Offices of Adamstown</td>
                        <td>72
                            <small class="text-muted">&nbsp;BPM</small>
                        </td>
                        <td>
                            <?php echo $heartRateActions ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="app-block-controls text-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newHeartRate">
                        <span class="glyphicon glyphicon-plus"></span> Add Heart Rate
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>