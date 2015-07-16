<div id="newCondition" class="success colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New - Condition/Problem</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="conditionName" class="col-xs-3 control-label">Condition/Problem</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="conditionName" placeholder="Condition/Problem" value="">
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
                        <label for="conditionDeterminedBy" class="col-xs-3 control-label">Determined By</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="conditionDeterminedBy" placeholder="Determined By" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dateConditionObserved" class="col-xs-3 control-label">Date Observed</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="dateConditionObserved" placeholder="Date Observed" type="date" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conditionNotes" class="col-xs-3 control-label">Notes</label>
                        <div class="col-xs-5">
                            <textarea class="form-control" id="conditionNotes" style="resize: vertical"></textarea>
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