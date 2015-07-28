<?php
$races = array(
    "Select a Race",
    "African American",
    "Asian",
    "Caucasian",
    "Middle Eastern",
    "Native American/Alaskan",
    "Pacific Islander",
    "Other"
);
$counties = array(
    "Select a County",
    "Adams",
    "Alcorn",
    "Amite",
    "Attala",
    "Benton",
    "Bolivar",
    "Calhoun"
);
$genders = array(
    "Select a Gender",
    "Male",
    "Female",
    "Other"
);

//ACCESS CONTROLLED NAVIGATION
//---------------------------------------
//---------------------------------------


if (isset($_COOKIE['teftuser'])) {


    //PUBLIC MEMBER ACCESS
    //---------------------------------------
    if ($_COOKIE['user'] == 'publicmember') {

        //Top Level Navigation
        $mainlinks = array(
            'home' => 'Home',
            'providers' => 'Find Services',
            'info' => 'Help & Info',
            'carerecord' => 'My Information'
        );
    }


    //PUBLIC VISITOR ACCESS
    //---------------------------------------
    else if ($_COOKIE['user'] == 'publicvisitor') {

        //Top Level Navigation
        $mainlinks = array(
            'home' => 'Home',
            'clinical' => 'Clinical',
            'billing' => 'Billing',
            'ltss' => 'LTSS',
            'helpandinfo' => 'Help & Info',
            'emergency' => 'Emergency'
        );
    }

}
//PUBLIC VISITOR ACCESS
//---------------------------------------
else {

    //Top Level Navigation
    $mainlinks = array(
        'home' => 'Home',
        'clinical' => 'Clinical',
        'billing' => 'Billing',
        'ltss' => 'LTSS',
        'helpandinfo' => 'Help & Info',
        'emergency' => 'Emergency'
    );
}

?>

    <!-- Fixed navbar -->
    <div id="globalHeader" class=" navbar-default navbar-fixed-top container-fluid no-padding" role="navigation">
        <!--      <div class="container">-->

        <div id="globalNavigationMenu" class="row no-margin">
            <div class="col-md-12">
                <div class="col-sm-6">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url() . "index.php/home"; ?>" style="width: auto;">
                            LTSS MD Provider Portal
                        </a>
                    </div>
                </div>
                    <div class="col-sm-6">
                        <ul id="profileNavigationMenu" class="pull-right no-margin">
                            <li class="header">
                                Adam Smith <span class="fa fa-user"></span>
                            </li>
                            <li>
                                <a href="#">Division of Medicaid</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/myprofile">My Profile</a>
                            </li>
                            <li>
                                <a href="">Settings</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="row no-margin">
            <?php require 'tab-nav.php'; ?>
        </div>
        <!-- </div> /.container -->
    </div><!-- /.navbar -->

    <!-- Modals -->
    <!-- Modal - Create an Account -->
    <div class="modal fade" id="createaccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Create an Account and Care Record</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">First Name</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="firstname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middlename" class="col-sm-3 control-label">Middle Name</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="middlename" placeholder="Middle Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="suffix" class="col-sm-3 control-label">Suffix</label>

                            <div class="col-sm-4">
                                <input class="form-control" id="suffix" placeholder="Suffix">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-sm-3 control-label">Date of Birth</label>

                            <div class="col-sm-4">
                                <input class="form-control" id="dob" placeholder="Date of Birth">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">Gender</label>

                            <div class="col-sm-4">
                                <select class="form-control" id="gender" placeholder="Gender">
                                    <?php
                                    foreach ($genders as $gender) {
                                        echo "<option>{$gender}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="race" class="col-sm-3 control-label">Race</label>

                            <div class="col-sm-4">
                                <select class="form-control" id="race" placeholder="Races">
                                    <?php
                                    foreach ($races as $race) {
                                        echo "<option>{$race}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hispanic" class="col-sm-3 control-label">Hispanic?</label>

                            <div class="col-sm-1">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="hispanic" name="hispanic"> Yes
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="hispanic" name="hispanic"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="county" class="col-sm-3 control-label">County</label>

                            <div class="col-sm-5">
                                <select class="form-control" id="county" placeholder="Counties">
                                    <?php
                                    foreach ($counties as $county) {
                                        echo "<option>{$county}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">e-mail</label>

                            <div class="col-sm-4">
                                <input class="form-control" id="email" placeholder="e-mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Phone #</label>

                            <div class="col-sm-4">
                                <input class="form-control" id="phone" placeholder="Phone #">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">User Name</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="username" placeholder="User Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>

                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal - Log In -->
<?php //require 'application/views/pages/shared/_login_modal.php'; ?>