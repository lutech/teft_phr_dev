<div id="newAllergy" class="success colored-header modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>New - Allergy</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="allergyName" class="col-xs-3 control-label">Name/Description</label>
                        <div class="col-xs-5">
                            <input class="form-control" id="allergyName" placeholder="Name/Description" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="allergenType" class="col-xs-3 control-label">Allergen Type</label>

                        <div class="col-xs-5">
                            <select class="form-control" id="allergenType" placeholder="Allergen Type">
                                <option value="0">Select a Type</option>
                                <option value="1">Animal</option>
                                <option value="2">Environmental</option>
                                <option value="3">Food</option>
                                <option value="4">Medication</option>
                                <option value="5">Plant</option>
                                <option value="6">Substance</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reactions" class="col-xs-3 control-label">Reactions</label>
                        <div class="col-xs-4">
                            <select class="form-control js-multiselect" style="text-transform: capitalize;" multiple="multiple" id="reactions">
                                <option value="">Select A Type</option>
                                <option value="789.0">Abdominal Pain And/Or Pain</option>
                                <option value="789.3">Abdominal Swelling</option>
                                <option value="790.92">Abnormal Blood Clotting</option>
                                <option value="796.1">Abnormal Reflexes</option>
                                <option value="783.5">Abnormal Thirst</option>
                                <option value="995.0">Anaphylactic Shock</option>
                                <option value="300.00">Anxiety And/Or Feeling Of Impending Doom</option>
                                <option value="790.7">Blood Infection</option>
                                <option value="786.50">Chest Tightness And/Or Discomfort</option>
                                <option value="787.7">Constipation</option>
                                <option value="786.2">Cough</option>
                                <option value="786.3">Coughing Up Blood</option>
                                <option value="787.91">Diarrhea</option>
                                <option value="787.2">Difficulty Swallowing</option>
                                <option value="780.4">Dizziness And/Or Light-Headedness</option>
                                <option value="782.7">Easy Bruising</option>
                                <option value="790.4">Elevated Liver Enzymes</option>
                                <option value="785.6">Enlarged Glands</option>
                                <option value="780.92">Excessive Crying Of Infant</option>
                                <option value="780.54">Excessive Sleeping</option>
                                <option value="781.94">Facial Weakness</option>
                                <option value="780.2">Fainting And/Or Loss Of Consciousness</option>
                                <option value="786.06">Fast Breathing</option>
                                <option value="785.0">Fast Heart Rate</option>
                                <option value="780.7">Fatigue</option>
                                <option value="780.6">Fever</option>
                                <option value="782.62">Flushing</option>
                                <option value="788.4">Frequent Urination</option>
                                <option value="787.3">Gas</option>
                                <option value="786.4">Green Or Yellow Phlegm</option>
                                <option value="783.4">Growth Problem</option>
                                <option value="780.1">Hallucinations</option>
                                <option value="784.0">Headache</option>
                                <option value="794.15">Hearing Changes</option>
                                <option value="785.2">Heart Murmur</option>
                                <option value="785.1">Heart Palpitations</option>
                                <option value="787.1">Heartburn</option>
                                <option value="786.8">Hiccough</option>
                                <option value="796.2">High Blood Pressure</option>
                                <option value="708.9">Hives (Red, Raised, Itchy Bumps)</option>
                                <option value="786.01">Hyperventilation</option>
                                <option value="780.52">Insomnia</option>
                                <option value="782.0">Itching Or Numbness Or Tingling</option>
                                <option value="372.14">Itchy, Watery Eyes</option>
                                <option value="782.4">Jaundice Or Yellow Skin</option>
                                <option value="781.3">Lack Of Coordination</option>
                                <option value="787.6">Leakage Of Stool</option>
                                <option value="788.30">Leakage Of Urine</option>
                                <option value="783.0">Loss Of Appetite</option>
                                <option value="790.01">Low Blood Count</option>
                                <option value="796.3">Low Blood Pressure</option>
                                <option value="780.93">Memory Loss</option>
                                <option value="781.99">Muscle Aches</option>
                                <option value="477">Nasal Congestion / Runny Nose</option>
                                <option value="787.0">Nausea And/Or Vomiting</option>
                                <option value="787.02">Nausea Only</option>
                                <option value="786.1">Noisy Breathing</option>
                                <option value="784.7">Nosebleed</option>
                                <option value="786.52">Painful Breathing</option>
                                <option value="788.1">Painful Urination</option>
                                <option value="782.61">Paleness</option>
                                <option value="781.4">Paralysis</option>
                                <option value="781.2">Problem Walking</option>
                                <option value="782.1">Rash</option>
                                <option value="788.5">Reduced Urination</option>
                                <option value="788.20">Retention Of Urine</option>
                                <option value="780.3">Seizures</option>
                                <option value="785.50">Shock</option>
                                <option value="786.05">Shortness Of Breath</option>
                                <option value="781.1">Smell Or Taste Disturbance</option>
                                <option value="784.99">Sneezing</option>
                                <option value="784.5">Speech Problem</option>
                                <option value="781.6">Stiff Neck</option>
                                <option value="780.8">Sweating</option>
                                <option value="782.3">Swelling</option>
                                <option value="784.1">Throat Pain</option>
                                <option value="781.0">Twitching</option>
                                <option value="780.0">Unconsciousness</option>
                                <option value="794.14">Visual Changes</option>
                                <option value="784.40">Voice Problem</option>
                                <option value="787.03">Vomiting Only</option>
                                <option value="781.9">Weakness</option>
                                <option value="783.1">Weight Gain</option>
                                <option value="783.2">Weight Loss</option>
                                <option value="786.07">Wheezing</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="treatment" class="col-xs-3 control-label">Treatment</label>
                        <div class="col-xs-5">
                            <textarea class="form-control" id="treatment" style="resize: vertical"></textarea>
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