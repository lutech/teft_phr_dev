<fieldset class="fieldset-container-one" id="Section6">
    <legend class="legend-header-one">
        Complaint
        <span class="ui-hide section-submit-required-title">Completion of this section is required to submit.</span><span class="section-submit-required-indicator" title="Completion of this section is required to submit." aria-hidden="true" role="presentation">**</span>
    </legend>
    <div class="header-info">
        <span class="app-flat-well"></span>Note: Actual explanation regarding the dissatisfaction
        with any aspect of the program's operations, activities, or administration are in
        the next Section: <a href="#eventResponseDescription">Description of Event(s) and Response</a>.
    </div>
    <fieldset class="fieldset-container-two">
        <legend class="legend-header-two">Complaint Type</legend>
        <div class="form-group">
            <input class="disabled" disabled="disabled" id="ReportableEvent_Complaint_ComplaintTypeIsQualityOfCareOrServiceIssue" name="ReportableEvent.Complaint.ComplaintTypeIsQualityOfCareOrServiceIssue" type="checkbox" value="true">
            <label for="ReportableEvent_Complaint_ComplaintTypeIsQualityOfCareOrServiceIssue" class="auto-width">Quality of Care/Service Issue</label>
        </div>
        <div class="form-group">
            <input class="disabled" disabled="disabled" id="ReportableEvent_Complaint_ComplaintTypeIsOther" name="ReportableEvent.Complaint.ComplaintTypeIsOther" type="checkbox" value="true">
            <label for="ReportableEvent_Complaint_ComplaintTypeIsOther" class="auto-width">Other</label>
        </div>
        <div class="form-group" id="ComplaintTypeOtherSpecified" style="display: none;">
            <fieldset class="fieldset-container-three">
                <legend>Please Specify:</legend>
                <div class="form-group">
                    <label for="ReportableEvent_Complaint_ComplaintTypeOtherSpecified">Please Specify:</label>
                    <textarea class="comments-textarea readonly" cols="20" id="ReportableEvent_Complaint_ComplaintTypeOtherSpecified" name="ReportableEvent.Complaint.ComplaintTypeOtherSpecified" readonly="readonly" form-groups="2"></textarea>
                </div>
            </fieldset>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-two">
        <legend class="legend-header-two">Complainant Information</legend>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_ComplainantRelationshipToParticipant_Name">Complainant's relationship to participant:</label>
            <input class="readonly" id="ReportableEvent_Complaint_ComplainantRelationshipToParticipant_Name" name="ReportableEvent.Complaint.ComplainantRelationshipToParticipant.Name" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group" id="ComplainantRelationshipToParticipantOtherSpecified" style="display: none;">
            <fieldset class="fieldset-container-three">
                <legend>Please Specify:</legend>
                <div class="form-group">
                    <label class="submit-required" for="ReportableEvent_Complaint_ComplainantRelationshipToParticipantOtherSpecified">Please Specify:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
                    <textarea class="comments-textarea readonly" cols="20" id="ReportableEvent_Complaint_ComplainantRelationshipToParticipantOtherSpecified" name="ReportableEvent.Complaint.ComplainantRelationshipToParticipantOtherSpecified" readonly="readonly" form-groups="2"></textarea>
                </div>
            </fieldset>
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_ComplainantName">Name of Complainant:</label>
            <input class="readonly" id="ReportableEvent_Complaint_ComplainantName" name="ReportableEvent.Complaint.ComplainantName" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_Phone">Phone:</label>


            <input class="readonly" id="ReportableEvent_Complaint_Phone" name="ReportableEvent.Complaint.Phone.Number" readonly="readonly" type="text" value="">
            <label class="frequency-label" for="ReportableEvent_Complaint_Phone_ext">Ext:</label>
            <input class="extension" id="ReportableEvent_Complaint_Phone_ext" name="ReportableEvent.Complaint.Phone.ExtensionNumber" readonly="readonly" type="text" value="">


            <span class="field-validation-valid" data-valmsg-for="ReportableEvent.Complaint.Phone.Number" data-valmsg-replace="true"></span>
            <span class="field-validation-valid" data-valmsg-for="ReportableEvent.Complaint.Phone.ExtensionNumber" data-valmsg-replace="true"></span>


        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_Email">Email Address:</label>
            <input class="readonly" id="ReportableEvent_Complaint_Email" name="ReportableEvent.Complaint.Email" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_Address">Address:</label>
            <input class="readonly" id="ReportableEvent_Complaint_Address" name="ReportableEvent.Complaint.Address" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_City">City:</label>
            <input class="readonly" id="ReportableEvent_Complaint_City" name="ReportableEvent.Complaint.City" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_StateName">State:</label>
            <input class="readonly" id="ReportableEvent_Complaint_StateName" name="ReportableEvent.Complaint.StateName" readonly="readonly" type="text" value="">
        </div>
        <div class="form-group">
            <label for="ReportableEvent_Complaint_Zip">Zip:</label>
            <input class="readonly" id="ReportableEvent_Complaint_Zip" name="ReportableEvent.Complaint.Zip" readonly="readonly" type="text" value="">
        </div>
    </fieldset>
    <div id="eventResponseDescription"></div>
</fieldset>