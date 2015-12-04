<div class="row">
    <div class="col-md-12">
        <div class="form-toolbar">
            <ul class="nav nav-tabs flat-tabs">
                <li class="">
                    <a href="#" data-trigger-form-unlock="#myprofile" aria-expanded="false";>
                    <span class="fa fa-pencil fa-2x"></span>
                    <span class="toolbar-button-label">Edit</span>
                    </a>
                </li>
                <li class="">
                    <a data-trigger-form-save="#myprofile" href="#" id="save" aria-expanded="false">
                        <span class="fa fa-save fa-2x"></span>
                        <span class="toolbar-button-label">Save</span>
                    </a>
                </li>
                <li class="">
                    <a data-trigger-form-lock="#myprofile" href="#" aria-expanded="true">
                        <span class="fa fa-check-circle fa-2x"></span>
                        <span class="toolbar-button-label">Done</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <span class="fa fa-print fa-2x"></span>
                        <span class="toolbar-button-label">Print</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <span class="fa fa-share fa-2x"></span>
                        <span class="toolbar-button-label">Share</span>
                    </a>
                </li>
            </ul>
            <div class="block app-block app-heading-block">
                <div class="header">
                    <h1>Event Report</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <form id="myprofile" class="panel-group accordion accordion-semi genericform-style pretty-form form-disabled">
                <?php require "_ReportableEventContent.php" ?>
            </form>
        </div>
    </div>
</div>