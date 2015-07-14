<div class="row">
    <div class="col-md-12">
        <div class="form-toolbar container">
            <ul class="nav nav-tabs flat-tabs">
                <li class="active">
                    <a href="#" data-trigger-form-lock="#cahpsSurvey" aria-expanded="true">
                        <span class="fa fa-leanpub fa-2x"></span>
                        <span class="toolbar-button-label">Read Only</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" data-trigger-form-unlock="#cahpsSurvey" aria-expanded="false";>
                        <span class="fa fa-pencil fa-2x"></span>
                        <span class="toolbar-button-label">Edit</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <span class="fa fa-save fa-2x"></span>
                        <span class="toolbar-button-label">Save</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" aria-expanded="false">
                        <span class="fa fa-print fa-2x"></span>
                        <span class="toolbar-button-label">Print</span>
                    </a>
                </li>
                <li class="" style="float: right">
                    <a href="#" aria-expanded="false">
                        <span class="fa fa-angle-double-down fa-2x"></span>
                        <span class="toolbar-button-label">Expand All</span>
                    </a>
                </li>
            </ul>
            <div class="block-flat header">
                <h1>CAHPS Survey</h1>
            </div>
        </div>
        <div class="content">
            <form id="cahpsSurvey" class="panel-group accordion accordion-semi pretty-form form-disabled">
                <?php require '/shared/cahpsSurvey/_CahpsSurveyQuestionsContent.php'; ?>
            </form>
        </div>
    </div>
</div>