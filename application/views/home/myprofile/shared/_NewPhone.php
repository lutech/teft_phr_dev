<div id="newPhone" class="success colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New - Phone</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="phone" class="col-xs-3 control-label">Phone #</label>
                        <div class="col-xs-3">
                            <input class="form-control" id="phone" placeholder="(999) 999-9999" type="tel" value="">
                        </div>
                        <div class="col-xs-2">
                            <input class="form-control" id="ext" placeholder="Ext" type="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneType" class="col-xs-3 control-label">Phone Type</label>

                        <div class="col-xs-5">
                            <select class="form-control" id="phoneType">
                                <option>select type</option>
                                <option>Main</option>
                                <option>Home</option>
                                <option>Mobile</option>
                                <option>Work</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="primaryPhone" class="col-xs-3 control-label">Primary Phone #?</label>

                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primaryPhone" name="primaryPhone"> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primaryPhone" name="primaryPhone"> No
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