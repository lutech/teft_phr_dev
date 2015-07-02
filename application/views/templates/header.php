<?php
		$races =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$counties =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$genders =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
						
		//ACCESS CONTROLLED NAVIGATION
		//---------------------------------------		
		//---------------------------------------
		
		
		if (isset($_COOKIE['user'])){


			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'publicmember'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'carerecord'  => 'My Information'
								);		
			}


			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
			
			//Top Level Navigation
			$mainlinks = array(
                'home' => 'Home',
                'clinical' => 'Clinical',
                'billing' => 'Billing',
                'ltss' => 'LTSS',
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
            'emergency' => 'Emergency'
								);
		}
		
?>

<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
<!--      <div class="container">-->

        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url()."index.php/home";?>" style="width: auto;">TEFT PHR</a>
                        </div>
                    </div>
                    <div class="navbar-collapse collapse">
                <div class="col-sm-6 text-center">
                    <ul class="nav navbar-nav" style="float: none; display: inline-block">
                        <?php

                        foreach ($mainlinks as $link => $linkname) {

                            $isactive =($link == $area) ? 'class="active"' : "";
                            $badge =($link == "submissions") ? '<span class="badge" style="background-color: #3276b1">3</span> ' : "";
                            echo "<li {$isactive}><a href=\"".base_url()."index.php/{$link}\">{$badge}{$linkname}</a></li>";

                        }

                        ?>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="nav navbar-nav navbar-right">
                        <?php /*?><?php

				$mainlinks = array(
						'signup' => 'Sign Up',
						'login' => 'Log In'
						);
				foreach ($mainlinks as $link => $linkname) {
					$isactive =($link == $page) ? 'class="active"' : "";
					echo "<li {$isactive}><a href=\"".base_url()."index.php/{$link}\">{$linkname}</a></li>";
				}
			?><?php */?>
                        <?php if (isset($_COOKIE['user'])){

                            if ( $_COOKIE['user'] == 'provider'){
                                $loginname = $_COOKIE['username'];
                                echo
                                    '<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, '.$loginname.' <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
										<li><a href="'.base_url().'index.php/site/logout'.'"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
									</ul>
								</li>'
                                ;
                            }
                            else if ( $_COOKIE['user'] == 'publicmember' ||
                                $_COOKIE['user'] == 'unauthorizedprovider' ||
                                $_COOKIE['user'] == 'authorizedprovider' ||
                                $_COOKIE['user'] == 'domstaff'){
                                $loginname = $_COOKIE['username'];
                                echo
                                    '<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, '.$loginname.' <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
										<li><a href="'.base_url().'index.php/site/logout'.'"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
									</ul>
								</li>'
                                ;
                            }
                            else if ( $_COOKIE['user'] == 'publicvisitor'){

                                echo '<li><a href="#" data-toggle="modal" data-target="#createaccount">Register</a></li>';
                                echo '<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>';
                            }
                        } else {
                            echo '<li><a href="#" data-toggle="modal" data-target="#createaccount">Register</a></li>';
                            echo '<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                    </div>
                </div>
            </div>
        </div><!--/.nav-collapse -->
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
						foreach ($genders as $gender){
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
						foreach ($races as $race){
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
						foreach ($counties as $county){
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal - Log In -->
<?php //require 'application/views/pages/shared/_login_modal.php'; ?>