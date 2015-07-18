<fieldset class="fieldset-container-one" id="Section3">
    <legend class="legend-header-one">
        Reporting Information
        <span class="ui-hide section-submit-required-title">Completion of this section is required to submit.</span><span class="section-submit-required-indicator" title="Completion of this section is required to submit." aria-hidden="true" role="presentation">**</span>
    </legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-required submit-required">Initial Telephone Report Reported to<span class="ui-hide submit-required-title">At least one selection is required to submit.</span><span class="submit-required-indicator" title="At least one selection is required to submit." aria-hidden="true" role="presentation">**</span>
            </legend>
            <div class="column-left">
                <div class="form-group">
                    <input checked="checked" class="disabled" disabled="disabled" id="ReportableEvent_ReportingInformation_InitialTelephoneReportToCM" name="ReportableEvent.ReportingInformation.InitialTelephoneReportToCM" type="checkbox" value="true"><input name="ReportableEvent.ReportingInformation.InitialTelephoneReportToCM" type="hidden" value="false">
                    <label for="ReportableEvent_ReportingInformation_InitialTelephoneReportToCM" class="auto-width">Support Planner</label>
                </div>
                <div class="form-group">
                    <input class="disabled" disabled="disabled" id="ReportableEvent_ReportingInformation_InitialTelephoneReportToOsa" name="ReportableEvent.ReportingInformation.InitialTelephoneReportToOsa" type="checkbox" value="true"><input name="ReportableEvent.ReportingInformation.InitialTelephoneReportToOsa" type="hidden" value="false">
                    <label for="ReportableEvent_ReportingInformation_InitialTelephoneReportToOsa" class="auto-width">Operating State Agency</label>
                </div>
            </div>
            <div class="column-right">
                <div class="form-group">
                    <input checked="checked" class="disabled" disabled="disabled" id="ReportableEvent_ReportingInformation_InitialTelephoneReportToOhs" name="ReportableEvent.ReportingInformation.InitialTelephoneReportToOhs" type="checkbox" value="true"><input name="ReportableEvent.ReportingInformation.InitialTelephoneReportToOhs" type="hidden" value="false">
                    <label for="ReportableEvent_ReportingInformation_InitialTelephoneReportToOhs" class="auto-width">Office of Health Services</label>
                </div>
                <div class="form-group">
                    <input checked="checked" class="disabled" disabled="disabled" id="ReportableEvent_ReportingInformation_InitialTelephoneReportToProvider" name="ReportableEvent.ReportingInformation.InitialTelephoneReportToProvider" type="checkbox" value="true"><input name="ReportableEvent.ReportingInformation.InitialTelephoneReportToProvider" type="hidden" value="false">
                    <label for="ReportableEvent_ReportingInformation_InitialTelephoneReportToProvider" class="auto-width">Provider</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Date/Time of Initial Telephone Report</legend>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_TelephoneReportDate">Date of Telephone Report:</label>


                <input class="readonly" data-val="true" data-val-date="The field TelephoneReportDate must be a date." id="ReportableEvent_ReportingInformation_TelephoneReportDate" name="ReportableEvent.ReportingInformation.TelephoneReportDate" readonly="readonly" type="text" value="07/17/2015" title="">
                <script type="text/javascript">

                    $(document).ready(function () {

                        var defaultOptions = {
                            format: "MM/dd/yyyy"
                        };

                        if ("" == "today") {
                            $.extend(defaultOptions, { max: new Date() })
                        }
                        if ("" == "today") {
                            $.extend(defaultOptions, { min: new Date() })
                        }

                        if ("readonly".indexOf("readonly") != -1) {

                        } else {
                            $("#ReportableEvent_ReportingInformation_TelephoneReportDate").kendoDatePicker(defaultOptions);
                        }

                        $("#ReportableEvent_ReportingInformation_TelephoneReportDate").attr('title', '');


                    });

                </script>

            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_TelephoneReportTime">Time of Telephone Report:</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_TelephoneReportTime" name="ReportableEvent.ReportingInformation.TelephoneReportTime" readonly="readonly" type="text" value="08:30 AM">
            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Reporter Information</legend>
            <div class="form-group">
                <label class="submit-required" for="ReportableEvent_ReportingInformation_ReporterRelationshipParticipant_Name">Relationship to Participant/Applicant:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterRelationshipParticipant_Name" name="ReportableEvent.ReportingInformation.ReporterRelationshipParticipant.Name" readonly="readonly" type="text" value="Guardian/Rep">
            </div>
            <div class="form-group" id="ReporterRelationshipParticipantOther" style="display: none;">
                <label for="ReportableEvent_ReportingInformation_ReporterRelationshipParticipantOther">Please specify:</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterRelationshipParticipantOther" name="ReportableEvent.ReportingInformation.ReporterRelationshipParticipantOther" readonly="readonly" type="text" value="">
            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_ReporterName">Name of Reporter:</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterName" name="ReportableEvent.ReportingInformation.ReporterName" readonly="readonly" type="text" value="Beverly Stevenson">
            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_ReporterTitle">Title (If applicable):</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterTitle" name="ReportableEvent.ReportingInformation.ReporterTitle" readonly="readonly" type="text" value="">
            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_ReporterAgency">Agency (If applicable):</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterAgency" name="ReportableEvent.ReportingInformation.ReporterAgency" readonly="readonly" type="text" value="">
            </div>
            <div class="form-group">
                <label class="submit-required" for="ReportableEvent_ReportingInformation_ReporterPhone">Phone:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>

                <input class="readonly" id="ReportableEvent_ReportingInformation_ReporterPhone" name="ReportableEvent.ReportingInformation.ReporterPhone.Number" readonly="readonly" type="text" value="258-968-6545">
                <label class="frequency-label" for="ReportableEvent_ReportingInformation_ReporterPhone_ext">Ext:</label>
                <input class="extension" id="ReportableEvent_ReportingInformation_ReporterPhone_ext" name="ReportableEvent.ReportingInformation.ReporterPhone.ExtensionNumber" readonly="readonly" type="text" value="">


                <span class="field-validation-valid" data-valmsg-for="ReportableEvent.ReportingInformation.ReporterPhone.Number" data-valmsg-replace="true"></span>
                <span class="field-validation-valid" data-valmsg-for="ReportableEvent.ReportingInformation.ReporterPhone.ExtensionNumber" data-valmsg-replace="true"></span>

            </div>
            <div class="form-group">
                <span class="label">Email Address:</span>


                <span class="data-element">b.stevenson@yipee.com</span>

            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Person Completing the Form</legend>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_CompletedDate">Date the Form was Completed and Sent to Support Planner:</label>


                <input class="readonly" data-val="true" data-val-date="The field CompletedDate must be a date." id="ReportableEvent_ReportingInformation_CompletedDate" name="ReportableEvent.ReportingInformation.CompletedDate" readonly="readonly" type="text" value="06/10/2015" title="">
                <script type="text/javascript">

                    $(document).ready(function () {

                        var defaultOptions = {
                            format: "MM/dd/yyyy"
                        };

                        if ("" == "today") {
                            $.extend(defaultOptions, { max: new Date() })
                        }
                        if ("" == "today") {
                            $.extend(defaultOptions, { min: new Date() })
                        }

                        if ("readonly".indexOf("readonly") != -1) {

                        } else {
                            $("#ReportableEvent_ReportingInformation_CompletedDate").kendoDatePicker(defaultOptions);
                        }

                        $("#ReportableEvent_ReportingInformation_CompletedDate").attr('title', '');


                    });

                </script>

            </div>
            <div class="form-group">
                <label class="submit-required" for="ReportableEvent_ReportingInformation_RelationshipParticipant_Name">Relationship to Participant/Applicant:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
                <input class="readonly textbox-medium" id="ReportableEvent_ReportingInformation_RelationshipParticipant_Name" name="ReportableEvent.ReportingInformation.RelationshipParticipant.Name" readonly="readonly" type="text" value="Administrative State Agency">
            </div>
            <div class="form-group" id="RelationshipParticipantOther" style="display: none;">
                <label for="ReportableEvent_ReportingInformation_RelationshipParticipantOther">Please specify:</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_RelationshipParticipantOther" name="ReportableEvent.ReportingInformation.RelationshipParticipantOther" readonly="readonly" type="text" value="">
            </div>
            <div class="form-group">
                <label class="complete-required" for="ReportableEvent_ReportingInformation_Name">Name:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_Name" name="ReportableEvent.ReportingInformation.Name" readonly="readonly" type="text" value="Brian Maven">
            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_Title">Title:</label>
                <input class="readonly" id="ReportableEvent_ReportingInformation_Title" name="ReportableEvent.ReportingInformation.Title" readonly="readonly" type="text" value="MFP Project Director">
            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_Agency">Agency:</label>
                <input class="readonly textbox-medium" id="ReportableEvent_ReportingInformation_Agency" name="ReportableEvent.ReportingInformation.Agency" readonly="readonly" type="text" value="Department of Health and Mental Hygiene">
            </div>
            <div class="form-group">
                <label class="submit-required" for="ReportableEvent_ReportingInformation_Phone">Phone:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>


                <input class="readonly" id="ReportableEvent_ReportingInformation_Phone" name="ReportableEvent.ReportingInformation.Phone.Number" readonly="readonly" type="text" value="4107679730">
                <label class="frequency-label" for="ReportableEvent_ReportingInformation_Phone_ext">Ext:</label>
                <input class="extension" id="ReportableEvent_ReportingInformation_Phone_ext" name="ReportableEvent.ReportingInformation.Phone.ExtensionNumber" readonly="readonly" type="text" value="">


                <span class="field-validation-valid" data-valmsg-for="ReportableEvent.ReportingInformation.Phone.Number" data-valmsg-replace="true"></span>
                <span class="field-validation-valid" data-valmsg-for="ReportableEvent.ReportingInformation.Phone.ExtensionNumber" data-valmsg-replace="true"></span>


            </div>
            <div class="form-group">
                <label for="ReportableEvent_ReportingInformation_EmailAddress">Email Address:</label>
                <input class="readonly textbox-medium" id="ReportableEvent_ReportingInformation_EmailAddress" name="ReportableEvent.ReportingInformation.EmailAddress" readonly="readonly" type="text" value="brian.maven@goodhealth.org">
            </div>
        </fieldset>
</fieldset>