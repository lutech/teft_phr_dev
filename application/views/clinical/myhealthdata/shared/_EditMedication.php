<div id="editMedication" class="warning colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit - Medication</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="medicationName" class="col-xs-3 control-label">Medication Name</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="medicationName" placeholder="Medication Name" value="Acebutolol">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="medicationDosage" class="col-xs-3 control-label">Dosage</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="medicationDosage" placeholder="Dosage" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="medicationFrequency" class="col-xs-3 control-label">Unit</label>
                        <div class="col-xs-5">
                            <select class="form-control" id="medicationFrequency" placeholder="Unit">
                                <option value="0">Select a Type</option>
                                <option value="1">gtts (drops)</option>
                                <option value="2">mEq (milli-equivalent)</option>
                                <option value="3">puffs</option>
                                <option value="4">gm (gram)</option>
                                <option value="5" selected="selected">mg (milligram)</option>
                                <option value="6">% (percent)</option>
                                <option value="7">L (liters)</option>
                                <option value="8">ml (milliliter)</option>
                                <option value="9">units</option>
                                <option value="10">mcg (microgram)</option>
                                <option value="11">oz (ounce)</option>
                                <option value="12">OTH (other)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="medicationRoute" class="col-xs-3 control-label">Route</label>
                        <div class="col-xs-5">
                            <select class="form-control" id="medicationRoute" placeholder="Route">
                                <option value="0">Select a Type</option>
                                <option value="1" selected="selected">By Mouth/Oral</option>
                                <option value="2">Rectal</option>
                                <option value="3">Enteral Tube</option>
                                <option value="4">Sublingual</option>
                                <option value="5">Topical</option>
                                <option value="6">Transdermal</option>
                                <option value="7">Intramuscular</option>
                                <option value="8">Inhalation</option>
                                <option value="9">Eye</option>
                                <option value="10">Intravenous (IV)</option>
                                <option value="11">Nasal</option>
                                <option value="12">Other</option>
                                <option value="13">Subcutaneous</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="medicationFrequency" class="col-xs-3 control-label">Frequency</label>
                        <div class="col-xs-5">
                            <select class="form-control" id="medicationFrequency" placeholder="Frequency">
                                <option value="0">Select a Type</option>
                                <option value="1">Every hour</option>
                                <option value="2">Every 2 hours</option>
                                <option value="3">Every 3 hours</option>
                                <option value="4" selected="selected">Every 4 hours</option>
                                <option value="5">Every 6 hours</option>
                                <option value="6">Every 8 hours</option>
                                <option value="7">Daily</option>
                                <option value="8">At Bedtime</option>
                                <option value="9">2 times daily, includes every 12 hrs</option>
                                <option value="10">3 times daily</option>
                                <option value="11">4 times daily</option>
                                <option value="12">5 times daily</option>
                                <option value="13">Every other day</option>
                                <option value="14">Every 3 days</option>
                                <option value="15">Weekly</option>
                                <option value="16">2 times weekly</option>
                                <option value="17">3 times weekly</option>
                                <option value="18">4 times weekly</option>
                                <option value="19">5 times weekly</option>
                                <option value="20">6 times weekly</option>
                                <option value="21">Monthly</option>
                                <option value="22">Twice every month</option>
                                <option value="23">Other</option>
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="medicationStartDate" class="col-xs-3 control-label">Start Date</label>
                        <div class="col-xs-4">
                            <input class="form-control" id="medicationStartDate" placeholder="Start Date" type="date" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="medicationEndDate" class="col-xs-3 control-label">End Date</label>
                        <div class="col-xs-4">
                            <input class="form-control" id="medicationEndDate" placeholder="End Date" type="date" value="">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="medicationPrescribedBy" class="col-xs-3 control-label">Prescribed By</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="medicationPrescribedBy" placeholder="Prescribed By" value="Dr. Stewart Jennings">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datePrescribed" class="col-xs-3 control-label">Date Prescribed</label>
                        <div class="col-xs-4">
                            <input class="form-control" id="datePrescribed" placeholder="Date Prescribed" type="date" value="">
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="atcNdcCode" class="col-xs-3 control-label">ATC/NDC Code</label>
                            <div class="col-xs-5">
                                <input class="form-control" id="atcNdcCode" placeholder="ATC/NDC Code" value="C07AB04">
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="reasonPrescribed" class="col-xs-3 control-label">Reason Prescribed</label>
                        <div class="col-xs-5">
                            <textarea class="form-control" id="reasonPrescribed" style="resize: vertical">Hypertension.</textarea>
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