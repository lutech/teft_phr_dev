<div class="col-md-12">
    <div class="form-toolbar container">
        <ul class="nav nav-tabs flat-tabs">
            <li>
                <a href="#" aria-expanded="true">
                    <span class="fa fa-print fa-2x"></span>
                    <span class="toolbar-button-label">Print</span>
                </a>
            </li>
            <li>
                <a href="#" aria-expanded="true">
                    <span class="fa fa-share fa-2x"></span>
                    <span class="toolbar-button-label">Share</span>
                </a>
            </li>
        </ul>
        <div class="block app-block app-heading-block">
            <div class="header">
                <h1>Lab Results</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="content no-padding">
            <?php require "_LabResultsContent.php" ?>
        </div>
        <div class="controls app-block-controls text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-trigger="#newLabResult"><span class="fa fa-plus"></span> Add Lab Result</button>
        </div>
   </div>
</div>