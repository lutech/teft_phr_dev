<div id="newDevice" class="success colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New - Medical/Assistive Device</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="deviceName" class="col-xs-3 control-label">Device Name</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="deviceName" placeholder="Device Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="anatomicLocation" class="col-xs-3 control-label">Anatomic Location</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="anatomicLocation" placeholder="ex: Arm or Chest" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conditionStartDate" class="col-xs-3 control-label">Onset Start Date</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="conditionStartDate" placeholder="Start Date" type="date" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conditionEndDate" class="col-xs-3 control-label">Onset End Date</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="conditionEndDate" placeholder="End Date" type="date" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deviceNotes" class="col-xs-3 control-label">Notes/Description</label>
                        <div class="col-xs-5">
                            <textarea class="form-control" id="deviceNotes" style="resize: vertical"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default md-close" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success md-close" data-dismiss="modal" data-trigger-modal-save="true">Save changes</button>
            </div>
        </div>
    </div>
</div>