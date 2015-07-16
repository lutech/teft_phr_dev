<div id="newAddress" class="success colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New - Address</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="streetaddress1" class="col-xs-3 control-label">Sreet Address 1</label>

                        <div class="col-xs-5">
                            <input class="form-control" id="streetaddress1" placeholder="Street Address 1" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="streetaddress2" class="col-xs-3 control-label">Sreet Address 2</label>

                        <div class="col-xs-5">
                            <input class="form-control" id="streetaddress2" placeholder="Street Address 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-xs-3 control-label">City</label>

                        <div class="col-xs-5">
                            <input class="form-control" id="city" placeholder="City" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="col-xs-3 control-label">State</label>

                        <div class="col-xs-4">
                            <p class="form-control-static">Colorado</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zipcode" class="col-xs-3 control-label">Zip Code</label>

                        <div class="col-xs-4">
                            <input class="form-control" id="zipcode" placeholder="Zip Code" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="county" class="col-xs-3 control-label">County</label>

                        <div class="col-xs-5">
                            <select class="form-control" id="county" placeholder="Counties">
                                <option value="0" class="text-muted">Select a County</option>
                                <option value="1">Adams</option>
                                <option value="2">Alcorn</option>
                                <option value="3">Amite</option>
                                <option value="4">Attala</option>
                                <option value="5">Benton</option>
                                <option value="6">Bolivar</option>
                                <option value="7">Calhoun</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressType" class="col-xs-3 control-label">Address Type</label>

                        <div class="col-xs-5">
                            <select class="form-control" id="addressType" placeholder="Address Type">
                                <option value="0" class="text-muted">Select a Type</option>
                                <option value="1">Facility</option>
                                <option value="2">Home</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="primary" class="col-xs-3 control-label">Primary Address?</label>

                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primary" name="primary"> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="primary" name="primary"> No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-xs-3 control-label">Description</label>
                        <div class="col-xs-5">
                            <textarea class="form-control" id="Description" style="resize: vertical"></textarea>
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