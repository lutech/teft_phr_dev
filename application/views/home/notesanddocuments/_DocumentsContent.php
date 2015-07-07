<div class="form-toolbar">
    <ul class="nav nav-tabs flat-tabs">
        <li>
            <a href="#" aria-expanded="true">
                <span class="fa fa-plus fa-2x"></span>
                <span class="toolbar-button-label">New Document</span>
            </a>
        </li>
    </ul>
    <div class="block-flat header">
        <table id="datatable" class="dataTable table table-bordered table-hover">
            <caption class="h3">Documents</caption>
            <thead>
            <tr>
                <th>
                    Document Name
                </th>
                <th>
                    Comments
                </th>
                <th>
                    Date Created
                </th>
                <th width="80px";>
                Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    My_Form.pdf
                </td>
                <td>
                    09/10/2014
                </td>
                <td>
                    Sent by my case manager.
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