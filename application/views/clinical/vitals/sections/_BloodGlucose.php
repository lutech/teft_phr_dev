<?php $bloodGlucoseActions = '
    <div class="dropdown">
        <a data-toggle="dropdown">Actions <span class="fa fa-caret-down"></span></a>

        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="#editGlucoseLevel"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
            </li>
            <hr class="no-margin"/>
            <li>
                <a href="#removeGlucoseLevel"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
            </li>
        </ul>
    </div>
'?>

<div class="block">
    <div class="header no-border">
        <h2><span class="icon-water"></span>&nbsp;Blood Glucose</h2>
    </div>
    <div class="content no-padding">
        <div class="row no-margin equal">
            <div class="col-md-6 no-padding">
                <div class="row no-margin">
                    <div class="col-md-12 no-padding">
                        <div class="red-chart">
                            <div id="bloodGlucose" style="height:200px;"></div>
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
                                        110
                                        <small class="text-muted">mg/dl</small>
                                    </span>
                                </span>
                                <span class="app-read-label">3:35PM <small>- 6/10/2015</small> <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        125
                                        <small class="text-muted">mg/dl</small>
                                    </span>
                                </span>
                                <span class="app-read-label">4:52PM <small>- 6/10/2015</small> <span class="fa fa-long-arrow-right"></span></span>
                            </div>
                        </div>
                        <div class="col-xs-4 no-margin">
                            <div>
                                <span class="h4">
                                    <span class="app-read-data">
                                        198
                                        <small class="text-muted">mg/dl</small>
                                    </span>
                                </span>
                                <span class="app-read-label">5:45PM <small>- 6/10/2015</small></span>
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
                                            145
                                            <small class="text-muted">mg/dl</small>
                                        </span>
                                        <span class="app-read-label no-margin">6/10/2015 - 6/10/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Base</span>
                                    <span class="h5">
                                        <span class="app-read-data no-margin">
                                            110
                                            <small class="text-muted">mg/dl</small>
                                        </span>
                                        <span class="app-read-label no-margin">6/10/2015</span>
                                    </span>
                                </small>
                            </div>
                            <div class="col-xs-4 no-margin">
                                <small>
                                    <span class="app-read-label">Peak</span>
                                    <span class="h5">
                                        <span class="app-read-data no-margin">
                                            198
                                            <small class="text-muted">mg/dl</small>
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
                        <th>Date/Time Observed</th>
                        <th>Source</th>
                        <th>Context</th>
                        <th>Result</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <tr>
                        <td>5:45PM <small>- 6/10/2015</small></td>
                        <td>Updated by you</td>
                        <td>
                            After Dinner
                        </td>
                        <td>
                            198<small class="text-muted">&nbsp;mg/dl</small>
                        </td>
                        <td>
                            <?php echo $bloodGlucoseActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4:52PM <small>- 6/10/2015</small></td>
                        <td>Updated by you</td>
                        <td>
                            Before Dinner
                        </td>
                        <td>
                            125<small class="text-muted">&nbsp;mg/dl</small>
                        </td>
                        <td>
                            <?php echo $bloodGlucoseActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>3:35PM <small>- 6/10/2015</small></td>
                        <td>Updated by you</td>
                        <td>
                            After Exercise
                        </td>
                        <td>
                            110<small class="text-muted">&nbsp;mg/dl</small>
                        </td>
                        <td>
                            <?php echo $bloodGlucoseActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>12:35PM <small>- 6/10/2015</small></td>
                        <td>Updated by you</td>
                        <td>
                            After Lunch
                        </td>
                        <td>
                            150<small class="text-muted">&nbsp;mg/dl</small>
                        </td>
                        <td>
                            <?php echo $bloodGlucoseActions ?>
                        </td>
                    </tr>
                    <tr>
                        <td>11:40AM <small>- 6/10/2015</small></td>
                        <td>Updated by you</td>
                        <td>
                            Before Lunch
                        </td>
                        <td>
                            112<small class="text-muted">&nbsp;mg/dl</small>
                        </td>
                        <td>
                            <?php echo $bloodGlucoseActions ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="app-block-controls text-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newGlucoseLevel">
                        <span class="glyphicon glyphicon-plus"></span> Add Glucose Level
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>