<div id="editDemographics" class="md-modal colored-header md-effect-10" style="perspective: 1300px;">
    <div class="md-content">
        <div class="modal-header">
            <h3>Edit Demographics</h3>
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
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
                        <input class="form-control" id="middlename" placeholder="Middle Name" value="Alfred">
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
                    <div class="col-xs-3">
                        <input class="form-control" id="suffix" placeholder="Suffix" value="Sr.">
                    </div>
                </div>

                <div class="form-group">
                    <label for="dob" class="col-xs-3 control-label">Date of Birth</label>
                    <div class="col-xs-3">
                        <input class="form-control" id="dob" placeholder="Date of Birth" type="date" value="01/01/1950">
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-xs-3 control-label">Gender</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="gender" placeholder="Gender">
                            <!--                                --><?php
                            //                                $val = 0;
                            //                                foreach ($genders as $gender){
                            //                                    echo "<option value=\"{$val}\">{$gender}</option>";
                            //                                    $val++;
                            //                                }
                            //                                ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="race" class="col-xs-3 control-label">Race</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="race" placeholder="Races">
                            <!--                                --><?php
                            //                                $val = 0;
                            //                                foreach ($races as $race){
                            //                                    echo "<option value=\"{$val}\">{$race}</option>";
                            //                                    $val++;
                            //                                }
                            //                                ?>
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
                    <label for="maritalstatus" class="col-xs-3 control-label">Marital Status</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="maritalstatus" placeholder="Marital Status">
                            <option>Select Marital Status</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="languages" class="col-xs-3 control-label">Languages</label>
                    <div class="col-xs-4">
                        <select class="form-control js-multiselect" multiple="multiple" id="languages">
                            <option>English</option>
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
            <button type="button" class="btn btn-primary md-close" data-dismiss="modal">Save changes</button>
        </div>
    </div>
</div>