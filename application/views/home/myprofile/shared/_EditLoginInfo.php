<div id="editAccount" class="warning colored-header modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit - Login Information</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="loginName" class="col-xs-3 control-label">Login Name</label>
                        <div class="col-xs-4">
                            <input type="text" readonly="readonly" class="form-control" id="loginName" placeholder="Login Name" value="adamsmith"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="oldLoginPassword" class="col-xs-3 control-label">Old Password</label>

                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="oldLoginPassword" placeholder="Old Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newLoginPassword" class="col-xs-3 control-label">New Password</label>

                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="newLoginPassword" placeholder="New Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmLoginPassword" class="col-xs-3 control-label">Confirm Password</label>

                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="confirmLoginPassword" placeholder="Comfirm Password"/>
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