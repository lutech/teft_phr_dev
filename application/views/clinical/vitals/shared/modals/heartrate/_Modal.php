<?php $header = 'Heart Rate'; $id = str_replace(' ', '', $header);?>
    <div id="edit<?php echo $id ?>" class="warning colored-header modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit - <?php echo $header ?></h3>
                </div>
                <div class="modal-body">
                    <?php require "_ModalContent.php" ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default md-close" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success md-close" data-dismiss="modal" data-trigger-modal-save="true">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="new<?php echo $id ?>" class="success colored-header modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>New - <?php echo $header ?></h3>
                </div>
                <div class="modal-body">
                    <?php require "_ModalContent.php" ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default md-close" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success md-close" data-dismiss="modal" data-trigger-modal-save="true">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php $id ='' ; $header = '' ?>