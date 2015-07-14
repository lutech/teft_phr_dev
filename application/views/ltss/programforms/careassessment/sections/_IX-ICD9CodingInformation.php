<div class="genericform-style read-only">
    <h2>IX. ICD-9 Coding Information</h2>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">A. Principal Diagnosis (Optional)</legend>
            <span class="header-info">
                Indicate the <strong>principal diagnosis for billing purposes. Indicate the ICD-9 CM code.</strong> for <strong>V-codes,</strong> also indicate the medical diagnosis and associated ICD-9 CM code.  Be specific as possible.
            </span>

        <div class="iform-fieldset">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two"><span>A1. <span><span>ICD-9 CM code for Principal Diagnosis at Assessment<span></span></span></span></span>
                </legend>
                <div class="form-group"><label for="ICD-9CMcode:A1">ICD-9 CM code:</label><input id="ICD-9CMcode:A1"
                                                                                          type="text"
                                                                                          class="kendo-date readonly"
                                                                                          readonly="readonly"></div>
            </fieldset>
        </div>
        <div class="form-group"><label for="A1a.PrincipalDiagnosisatAssessment">A1a. Principal Diagnosis at
                Assessment</label><input id="A1a.PrincipalDiagnosisatAssessment" type="text" class="readonly"
                                         readonly="readonly"></div>
        <div class="iform-fieldset">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two"><span>A2. <span><span>If Principal Diagnosis was a V-code, what was the ICD-9 CM code for the primary medical condition or injury being treated?<span></span></span></span></span>
                </legend>
                <div class="form-group"><label for="ICD-9CMcode:A2">ICD-9 CM code:</label><input id="ICD-9CMcode:A2"
                                                                                          type="text"
                                                                                          class="kendo-date readonly"
                                                                                          readonly="readonly"></div>
            </fieldset>
        </div>
        <div class="form-group"><label
                for="A2a.IfPrincipalDiagnosiswasaV-Code,whatwastheprimarymedicalconditionorinjurybeingtreated">A2a. If
                Principal Diagnosis was a V-Code, what was the primary medical condition or injury being treated</label><input
                id="A2a.IfPrincipalDiagnosiswasaV-Code,whatwastheprimarymedicalconditionorinjurybeingtreated"
                type="text" class="readonly" readonly="readonly"></div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">B. Other Diagnoses, Comorbidities, Complications (Optional on PAC Admission
            only.)
        </legend>
            <span class="header-info">
                List up to 15 <strong>ICD-9 CM codes</strong> and associated diagnoses being treated, managed, or monitored in this setting. Include all diagnoses (e.g., depression, schizophrenia, dementia, protein calorie malnutrition). If a V-code is listed, also provide the <strong>ICD-9
                    CM code</strong> for the medical diagnosis being treated.
            </span>

        <div data-bind="foreach: Diseases"></div>
        <div class="add-button">
            <a href="#" id="ButtonAddMedication" data-bind="click: addDisease">
                Add Medication
            </a>
        </div>
        <div class="iform-fieldset">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>B16. <span><span>Is this list complete?<span></span></span></span></span></legend>
                <div class="form-group"><input type="radio" name="B16" id="B160" value="1" class="readonly" readonly="readonly"
                                        disabled="disabled"><label for="B160">0. No</label></div>
                <div class="form-group"><input type="radio" name="B16" id="B161" value="2" class="readonly" readonly="readonly"
                                        disabled="disabled"><label for="B161">1. Yes</label></div>
            </fieldset>
        </div>
    </fieldset>
</div>