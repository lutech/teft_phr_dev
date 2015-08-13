<div class="form-toolbar">
    <div class="tab-content no-box-shadow" style="background: #E4E4E4; border-top: 1px solid #C9C9C9;">
        <fieldset class="">
            <legend class="h4 text-center hidden">advanced search</legend>
            <div class="form-group">
                <label for="clientName">Client:</label>
                <input type="search" id="clientName" placeholder="Name/ID" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="ssn">SSN #</label>
                <input type="search" id="ssn" placeholder="eg., 123-45-6789" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="medicaid">Medicaid #</label>
                <input type="search" id="medicaid" placeholder="eg., 123456789" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="search" id="dob" placeholder="mm/dd/yyyy" class="form-control date"/>
            </div>
            <div class="form-group">
                <label for="jurisdiction">Jurisdiction</label>
                <select id="jurisdiction" class="form-control">
                    <option value="0"></option>
                    <option value="1">Annapolis</option>
                    <option value="2">Baltimore</option>
                </select>
            </div>
            <hr/>
            <button type="button" class="btn btn-primary btn-block">
                <span class="h4">search <span class="fa fa-chevron-circle-right"></span></span>
            </button>
        </fieldset>
    </div>
</div>