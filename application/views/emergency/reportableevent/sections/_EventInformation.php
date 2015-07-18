<fieldset class="fieldset-container-one" id="Section4">
<legend class="legend-header-one">
    Event Information
    <span class="ui-hide section-submit-required-title">Completion of this section is required to submit.</span><span class="section-submit-required-indicator" title="Completion of this section is required to submit." aria-hidden="true" role="presentation">**</span>
</legend>
<fieldset class="fieldset-container-two">
    <legend class="legend-header-two">Event Information</legend>
    <div class="form-group">
        <label for="ReportableEvent_EventInformation_EventDate">Event Date:</label>
        <input class="readonly" data-val="true" data-val-date="The field EventDate must be a date." id="ReportableEvent_EventInformation_EventDate" name="ReportableEvent.EventInformation.EventDate" readonly="readonly" type="text" value="05/18/2015" title="">
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
                    $("#ReportableEvent_EventInformation_EventDate").kendoDatePicker(defaultOptions);
                }

                $("#ReportableEvent_EventInformation_EventDate").attr('title', '');


            });

        </script>

    </div>
    <div class="form-group">
        <label for="ReportableEvent_EventInformation_EventTime">Event Time:</label>
        <input class="readonly" id="ReportableEvent_EventInformation_EventTime" name="ReportableEvent.EventInformation.EventTime" readonly="readonly" type="text" value="05:00 PM">
    </div>
    <div class="form-group">
        <label class="complete-required" for="ReportableEvent_EventInformation_ReportableEventType_Name">Event Type:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="ReportableEvent_EventInformation_ReportableEventType_Name" name="ReportableEvent.EventInformation.ReportableEventType.Name" readonly="readonly" type="text" value="Complaint">
    </div>
    <div class="form-group">
        <label for="ReportableEvent_EventInformation_ServiceInterruptionStartDate">Start Date of Service Interruption:</label>


        <input class="readonly" data-val="true" data-val-date="The field ServiceInterruptionStartDate must be a date." id="ReportableEvent_EventInformation_ServiceInterruptionStartDate" name="ReportableEvent.EventInformation.ServiceInterruptionStartDate" readonly="readonly" type="text" value="" title="">
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
                    $("#ReportableEvent_EventInformation_ServiceInterruptionStartDate").kendoDatePicker(defaultOptions);
                }

                $("#ReportableEvent_EventInformation_ServiceInterruptionStartDate").attr('title', '');


            });

        </script>

    </div>
    <div class="form-group">
        <label for="ReportableEvent_EventInformation_ServiceInterruptionEndDate">End Date of Service Interruption:</label>


        <input class="readonly" data-val="true" data-val-date="The field ServiceInterruptionEndDate must be a date." id="ReportableEvent_EventInformation_ServiceInterruptionEndDate" name="ReportableEvent.EventInformation.ServiceInterruptionEndDate" readonly="readonly" type="text" value="" title="">
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
                    $("#ReportableEvent_EventInformation_ServiceInterruptionEndDate").kendoDatePicker(defaultOptions);
                }

                $("#ReportableEvent_EventInformation_ServiceInterruptionEndDate").attr('title', '');


            });

        </script>

    </div>
    <div class="form-group" id="EventInfoAddress" style="">
        <label class="submit-required" for="ReportableEvent_EventInformation_Address_FullAddress">Event Address:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="ReportableEvent_EventInformation_Address_FullAddress" name="ReportableEvent.EventInformation.Address.FullAddress" readonly="readonly" type="text" value="Adams, CO 71800">
    </div>
    <div class="form-group" id="divOtherAddressComments" style="">
        <fieldset class="fieldset-container-three">
            <legend>Address Notes:</legend>
            <div class="form-group">
                <label for="ReportableEvent_EventInformation_OtherAddressNotes">Address Notes:</label>
                <textarea class="readonly comments-textarea" cols="20" id="ReportableEvent_EventInformation_OtherAddressNotes" name="ReportableEvent.EventInformation.OtherAddressNotes" readonly="readonly" form-groups="2"></textarea>
            </div>
        </fieldset>
    </div>
    <div class="form-group">
        <label class="submit-required" for="ReportableEvent_EventInformation_CountyName">Jurisdiction/County:<span class="ui-hide submit-required-title">This field is required to submit.</span><span class="submit-required-indicator" title="This field is required to submit." aria-hidden="true" role="presentation">**</span></label>
        <input class="readonly" id="ReportableEvent_EventInformation_CountyName" name="ReportableEvent.EventInformation.CountyName" readonly="readonly" type="text" value="Allegany">
    </div>
</fieldset>
<div id="ProvidersGrid_wrapper" class="dataTables_wrapper" role="grid"></div>
<table id="ProvidersGrid" class="generalTable dataTable" summary="Provider List">
    <caption class="caption-header"><span>Provider List</span></caption>
    <thead>
    <tr role="form-group">
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Provider Name
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Provider Name
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Provider #
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Provider #
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Provider Type
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Provider Type
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Contact Person
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Contact Person
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Phone #
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Phone #
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="ProvidersGrid" form-groupspan="1" colspan="1" aria-label="Involvement Type
            : activate to sort column ascending">
            <div class="DataTables_sort_wrapper">Involvement Type
                <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
        </th>
    </tr>
    </thead>
    <tfoot></tfoot>
    <tbody>
    <tr role="form-group" class="odd">
        <td role="gridcell" class=" "><span class="data-element">A &amp; D COMFORT ZONE</span></td>
        <td role="gridcell" class=" "><span class="data-element">410620200</span></td>
        <td role="gridcell" class=" "> N/A
        </td>
        <td role="gridcell" class=" "><span class="data-element"></span></td>
        <td role="gridcell" class=" ">
            N/A
        </td>
        <td role="gridcell" class=" "><span class="data-element">Present</span></td>
    </tr>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        checkEventAddressAndSetAttr();
    });

    function checkEventAddressAndSetAttr() {
        if ($("#ReportableEvent_EventInformation_ClientAddressId").val() == "Other") {
            $("#divOtherAddressComments").show();
        }
        else {
            $("#divOtherAddressComments").hide();
        }
        if ($("#ReportableEvent_EventInformation_Address_FullAddress").val() == "") {
            $("#EventInfoAddress").hide();
        }
        else {
            $("#EventInfoAddress").show();
        }
    }
</script>
</fieldset>