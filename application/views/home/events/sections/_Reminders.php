<div class="form-toolbar">
    <ul class="nav nav-tabs flat-tabs">
        <li>
            <a href="#" aria-expanded="true">
                <span class="fa fa-plus fa-2x"></span>
                <span class="toolbar-button-label">Add Reminder</span>
            </a>
        </li>
    </ul>
    <div class="block">
        <div class="header no-border">
            <h2>Reminders</h2>
        </div>
        <div class="content no-padding">
            <table class="dataTable table table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        Date Created
                    </th>
                    <th>
                        Title
                    </th>
                    <th width="80px";>
                    Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        09/10/2014
                    </td>
                    <td>
                        Lorem Ipsum.
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default btn-xs" href="<?php echo base_url()."index.php/ltss/qualityassurance/cahpssurvey/details" ?>">Details</a>
                            <button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button" aria-expanded="false">
                                <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li>
                                    <a href="#"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-print"></span>&nbsp;&nbsp;Print</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"><span class="fa fa-trash"></span>&nbsp;&nbsp;Discard</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>