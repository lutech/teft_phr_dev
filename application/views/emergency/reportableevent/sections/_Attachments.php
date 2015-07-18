<?php $attachmentActions = '
    <a href="#removeAttachment" role="button" data-toggle="modal"><span class="fa fa-trash"></span>&nbsp;&nbsp;Remove</a>
'?>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Attachments</legend>
    <div class="row no-margin">
        <div class="col-md-23 no-padding" style="border-left: 1px solid #EEE !important;">
            <table class="app-block-table">
                <thead>
                <tr>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Added By</th>
                    <th>Date Added</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="no-border-x">
                <tr>
                    <td>Notes</td>
                    <td>Hand written description of the event.</td>
                    <td>
                        Uploaded by you
                    </td>
                    <td>
                        06/02/2015
                    </td>
                    <td>
                        <?php echo $attachmentActions ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
<div class="app-block-controls text-center">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newWeight">
        <span class="glyphicon glyphicon-plus"></span> Add Attachment
    </button>
</div>