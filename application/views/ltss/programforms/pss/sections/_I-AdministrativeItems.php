<div class="genericform-style">
<h2>Overview Information</h2>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">General Information</legend>
    <div class="column-left">
        <div class="form-group summary">
            <span class="label">Client Name:</span>
            <span class="data-element">





    <span class="data-element">CLARENCE  DAVIDSON </span>
</span>
        </div>
        <div class="form-group summary">
            <span class="label">MA#</span>
            <span class="data-element">





    <span class="data-element">41804875100</span>
</span>
        </div>
        <div class="form-group summary">
            <span class="label">Primary Phone#</span>
            <span class="data-element">





    <span class="data-element"></span>
</span>
        </div>
        <div class="form-group summary">
            <span class="label">Current Address:</span>
            <span class="data-element">





    <span class="data-element">7425 SUDBROOK RD, BALTIMORE 21208</span>
</span>
        </div>
    </div>
    <div class="column-right">
        <div class="form-group summary">
            <span class="label">DOB:</span>
            <span class="data-element">

<span id="DateOfBirth" class="display-date data-element">05/01/1943</span>

</span>
        </div>
        <div class="form-group summary">
            <span class="label">Age:</span>
            <span class="data-element">





    <span class="data-element">72</span>
</span>
        </div>
        <div class="form-group summary">
            <span class="label">Client's Current Support Planning Agency:</span>
            <span class="data-element">





    <span class="data-element">AAA - BALTIMORE CO DEPART OF AGING</span>
</span>
        </div>
    </div>
</fieldset>


<h5>CFC Representatives</h5>

<div class="fieldset-container-one">
    <div id="CfcRepresentativeFormGrid_wrapper" class="dataTables_wrapper" role="grid"></div>
    <table id="CfcRepresentativeFormGrid" class="generalTable dataTable" summary="List of Cfc Representative Forms">
        <thead>
        <tr role="form-group">
            <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="CfcRepresentativeFormGrid" form-groupspan="1" colspan="1" aria-label="Representative Name: activate to sort column ascending">
                <div class="DataTables_sort_wrapper">Representative Name<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                </div>
            </th>
            <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="CfcRepresentativeFormGrid" form-groupspan="1" colspan="1" aria-label="Authorized to Sign POS: activate to sort column ascending">
                <div class="DataTables_sort_wrapper">Authorized to Sign POS<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                </div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="odd">
            <td valign="top" colspan="2" class="dataTables_empty">No data available in table</td>
        </tr>
        </tbody>
    </table>

</div>

<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Overview</legend>

    <div class="form-group">
        <label class="complete-required" for="ProgramType_Name">Program Type:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="ProgramType_Name" name="ProgramType.Name" readonly="readonly" type="text" value="CO">
    </div>
    <div class="form-group">
        <label class="complete-required" for="PlanOfServiceType_Name">POS Type:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="PlanOfServiceType_Name" name="PlanOfServiceType.Name" readonly="readonly" type="text" value="Annual">
    </div>
    <div class="form-group">
        <label for="CreatedDate">Created Date:</label>


        <input class="readonly" data-val="true" data-val-date="The field CreatedDate must be a date." id="CreatedDate" name="CreatedDate" readonly="readonly" type="text" value="04/21/2015" title="">
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
                    $("#CreatedDate").kendoDatePicker(defaultOptions);
                }

                $("#CreatedDate").attr('title', '');


            });

        </script>

    </div>
    <div class="form-group">
        <label class="submit-required" for="EffectiveDate">POS Effective Date:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>


        <input class="readonly" data-val="true" data-val-date="The field EffectiveDate must be a date." id="EffectiveDate" name="EffectiveDate" readonly="readonly" type="text" value="06/05/2015" title="">
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
                    $("#EffectiveDate").kendoDatePicker(defaultOptions);
                }

                $("#EffectiveDate").attr('title', '');


            });

        </script>

    </div>
    <div class="form-group">
        <label for="Narrative">Narrative:</label>
        <textarea class="comments-textarea readonly" cols="20" id="Narrative" name="Narrative" readonly="readonly" form-groups="2">**PLEASE NOTE: THIS IS AN ANNUAL POS. THE FOLLOWING CHANGES HAVE BEEN MADE SINCE THE LAST POS: Wipes have been removed.</textarea>
    </div>
</fieldset>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Address to Receive Services</legend>
    <div class="form-group">
        <label class="submit-required" for="AddressToReceiveServicesDescriptionView">Address Type:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="AddressToReceiveServicesDescriptionView" name="AddressToReceiveServicesDescriptionView" readonly="readonly" type="text" value="Community - MMIS Import">
    </div>
    <div class="form-group">
        <span class="label">Full Address:</span>


        <div class="data-element">
            7425 SUDBROOK RD, <br>
            BALTIMORE, MD 21208
            <input id="AddressToReceiveServices_Address_FullAddress" name="AddressToReceiveServices.Address.FullAddress" type="hidden" value="7425 SUDBROOK RD, BALTIMORE, MD 21208">
        </div>

        <input id="AddressToReceiveServices_Address_FullAddress" name="AddressToReceiveServices.Address.FullAddress" type="hidden" value="7425 SUDBROOK RD, BALTIMORE, MD 21208">
    </div>
    <fieldset class="fieldset-container-two">
        <legend class="legend-header-two">Community Settings</legend>
        <div class="column-left">
            <div class="form-group summary">
                <span class="label">Has the Community Settings Questionnaire been completed?</span>


                <span class="data-element">No</span>

            </div>
            <div class="form-group summary">
                <span class="label">Last Completion Date:</span>


                <span id="AddressToReceiveServices_LastCompletionDate" class="display-date data-element">N/A</span>


            </div>
        </div>
        <div class="column-right">
            <div class="form-group summary">
                <span class="label">Meets the definition of Community Residence?</span>


                <span class="data-element">N/A</span>

            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-container-two">
        <legend class="legend-header-two">Home Setting</legend>
        <div class="column-left">
            <div class="form-group summary">
                <span class="label">Home Type:</span>
                <span>N/A</span>
            </div>
            <div class="form-group summary">
                <span class="label">Home Setting:</span>
                <span>N/A</span>
            </div>
        </div>
        <div class="column-right">
            <div class="form-group summary">
                <span class="label">Lives With Family:</span>


                <span id="AddressToReceiveServices_LivesWithFamily" class="data-element">N/A</span>
            </div>
            <div class="form-group summary">
                <span class="label">Is setting chosen by the participant?</span>


                <span id="AddressToReceiveServices_IsSettingChosenByTheParticipant" class="data-element">N/A</span>
            </div>
        </div>
    </fieldset>
</fieldset>
</div>