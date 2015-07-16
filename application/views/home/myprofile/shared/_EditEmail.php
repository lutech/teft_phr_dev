<div id="editEmail" class="warning colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit - Email</h3>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="email" class="col-xs-3 control-label">Email Address</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="email" placeholder="john.doe@email.com" type="email" value="c.smith@yipee.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailType" class="col-xs-3 control-label">Email Type</label>

                        <div class="col-xs-5">
                            <select class="form-control" id="emailType" placeholder="Email Type">
                                <option value="0">Select a Type</option>
                                <option value="1" selected="selected">Personal</option>
                                <option value="2">Work</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="primaryEmail" class="col-xs-3 control-label">Primary Email?</label>

                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primaryEmail" name="primaryEmail" checked="checked"> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primaryEmail" name="primaryEmail"> No
                                </label>
                            </div>
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