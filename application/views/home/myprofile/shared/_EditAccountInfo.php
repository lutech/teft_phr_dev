<div id="editAccountInfo" class="warning colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit - Account Information</h3>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="firstname" class="col-xs-3 control-label">First Name</label>

                        <div class="col-xs-5">
                            <input class="form-control" id="firstname" placeholder="First Name" value="Cicio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middlename" class="col-xs-3 control-label">Middle Name</label>

                        <div class="col-xs-5">
                            <input class="form-control" type="text" id="middlename" placeholder="Middle Name" value="Alfred">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="col-xs-3 control-label">Last Name</label>

                        <div class="col-xs-5">
                            <input class="form-control" id="lastname" placeholder="Last Name" value="Smith">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="suffix" class="col-xs-3 control-label">Suffix</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="suffix" placeholder="Suffix" value="Sr.">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dob" class="col-xs-3 control-label">Date of Birth</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="dob" placeholder="Date of Birth" type="date" value="01/01/1950">
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