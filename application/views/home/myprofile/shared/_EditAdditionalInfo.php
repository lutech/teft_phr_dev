<div id="editAdditionalInfo" class="warning colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit - Additional Information</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="gender" class="col-xs-3 control-label">Gender</label>

                        <div class="col-xs-4">
                            <select class="form-control" id="gender" placeholder="Gender">
                                <option value="genders/-1">Female</option>
                                <option selected="selected" value="genders/-2">Male</option>
                                <option value="genders/-3">Not Indicated</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="maritalstatus" class="col-xs-3 control-label">Marital Status</label>

                        <div class="col-xs-4">
                            <select class="form-control" id="maritalstatus" placeholder="Marital Status">
                                <option>Select Marital Status</option>
                                <option>Single</option>
                                <option selected="selected">Married</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="race" class="col-xs-3 control-label">Race</label>

                        <div class="col-xs-4">
                            <select class="form-control" id="race" placeholder="Races">
                                <option value="racetypes/-1">Native American / Alaska Native</option>
                                <option value="racetypes/-2">Asian</option>
                                <option value="racetypes/-3">Black/African American</option>
                                <option selected="selected" value="racetypes/-4">Caucasian</option>
                                <option value="racetypes/-5">Native Hawaiian/Other Pacific Islander</option>
                                <option value="racetypes/-6">More than one race reported</option>
                                <option value="racetypes/-7">Unknown</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hispanic" class="col-xs-3 control-label">Hispanic?</label>

                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="hispanic" name="hispanic"> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="hispanic" name="hispanic" checked="checked"> No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="languages" class="col-xs-3 control-label">Languages</label>

                        <div class="col-xs-4">
                            <select class="form-control js-multiselect" multiple="multiple" id="languages">
                                <option selected="selected" >English</option>
                                <option>French</option>
                                <option>German</option>
                                <option>Spanish</option>
                            </select>
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