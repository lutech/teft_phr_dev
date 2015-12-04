<div class="col-md-12">
    <div class="form-toolbar">
        <ul class="nav nav-tabs flat-tabs">
            <li class="">
                <a href="#" aria-expanded="true">
                    <span class="fa fa-plus fa-2x"></span>
                    <span class="toolbar-button-label">Add Contact</span>
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
            <li class="" style="float: right">
                <a href="#" aria-expanded="false">
                    <span class="fa fa-angle-double-down fa-2x"></span>
                    <span class="toolbar-button-label">Expand All</span>
                </a>
            </li>
        </ul>
        <div class="block app-block app-heading-block">
            <div class="header">
                <h1><span class="fa fa-users"></span> My Contacts</h1>
            </div>
        </div>
    </div>
    <div class="content">
        <div id="myprofile" class="panel-group accordion accordion-semi pretty-form form-disabled">
            <?php require '_ContactsContent.php'; ?>
        </div>
    </div>
</div>