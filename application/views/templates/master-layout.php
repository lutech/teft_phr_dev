<!doctype html>
<html id="html">
	<head>
		<title><?php echo "Information and Referral - {$page}" ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/app.css">


        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/fonts/font-awesome/css/font-awesome.css">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap-multiselect.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.bootstrap.wizard.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&"></script>
		
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	</head>	
	<body>
		<!-- Main Header -->
		<?php require 'header.php'; ?>
        <div id="main-nav" class="row navbar navbar-default navbar-fixed-top" >
            <?php require 'tab-nav.php'; ?>
            <?php require 'bc-nav.php'; ?>
        </div>
		<div id="main-body" class="container">
			<!-- Main Content -->
		<?php require "application/views/{$area}/{$page}.php";?>
		</div>
        <!-- Main Footer -->
        <!--< ?php require 'footer.php'; ?> -->
        
        <!-- Main Scripts -->
		<?php require 'scripts.php'; ?>
	</body>
</html>
