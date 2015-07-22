<?php $header = 'Navigation'; $id = strtolower(str_replace(' ', '', $header));?>
    <div id="<?php echo $id ?>Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="display: block; width: auto;">
            <div class="modal-content" style=" margin: 0 auto; background-color: #342851">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close pull-right"><span class="fa fa-close"></span></button>
                </div>
                <div class="modal-body container">
                    <?php require "_ModalContent.php" ?>
                </div>
            </div>
        </div>
    </div>
<?php $id ='' ; $header = '' ?>