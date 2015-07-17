<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="dateBloodGlucoseObserved" class="col-xs-3 control-label">Date Observed</label>
        <div class="col-xs-3">
            <input class="form-control" id="dateBloodGlucoseObserved" placeholder="Date Observed" type="date" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="timeBloodGlucoseObserved" class="col-xs-3 control-label">Time Observed</label>
        <div class="col-xs-3">
            <input class="form-control" id="timeBloodGlucoseObserved" placeholder="Time Observed" value="">
        </div>
    </div>
    <br/>
    <div class="form-group">
        <label for="bloodGlucoseResult" class="col-xs-3 control-label">Measurement</label>
        <div class="col-xs-5">
            <input class="form-control" id="bloodGlucoseResult" placeholder="Measurement" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="medicationRoute" class="col-xs-3 control-label">Measurement Type</label>
        <div class="col-xs-3">
            <select class="form-control" id="medicationRoute">
                <option value="0">Select a Type</option>
                <option value="false">mg/dL</option>
                <option value="true">mmol/L</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="bloodGlucoseContext" class="col-xs-3 control-label">Context</label>
        <div class="col-xs-5">
            <select class="form-control" id="bloodGlucoseContext">
                <option value="0">Select Context</option>
                <option value="AfterBreakfast">After breakfast</option>
                <option value="AfterDinner">After dinner</option>
                <option value="AfterExercise">After exercise</option>
                <option value="AfterLunch">After lunch</option>
                <option value="AfterMeal">After meal</option>
                <option value="BeforeBedtime">Before bedtime</option>
                <option value="BeforeBreakfast">Before breakfast</option>
                <option value="BeforeDinner">Before dinner</option>
                <option value="BeforeExercise">Before exercise</option>
                <option value="BeforeLunch">Before lunch</option>
                <option value="BeforeMeal">Before meal</option>
                <option value="fasting">Fasting</option>
                <option value="Ignore">Ignore</option>
                <option value="non-fasting">Non-fasting</option>
            </select>
        </div>
    </div>
    <br/>
    <div class="form-group">
        <label for="bloodGlucoseSource" class="col-xs-3 control-label">Source</label>
        <div class="col-xs-5">
            <input class="form-control" id="bloodGlucoseSource" placeholder="Source" value="">
        </div>
    </div>
</form>