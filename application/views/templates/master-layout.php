<!doctype html>
<html id="html">
	<head>
		<title><?php echo "LTSS PHR Portal - {$page}" ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/fonts/webfont-medical-icons/wfmi-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/fonts/fontsaddict-medical/Fontsaddict.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/entypo.css">

		<!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/jquery.dataTables_themeroller.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/toggles.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/jquery.fullcalendar/fullcalendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/jquery.gritter/css/jquery.gritter.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/js/lib/jquery.niftymodals/css/component.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/app.css">




		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery-ui-1.10.2.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap-multiselect.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/localstoragedb.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.bootstrap.wizard.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/skycons/skycons.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/slideout.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.easypiechart/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/intro.js/intro.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/moment.js/min/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.gritter/js/jquery.gritter.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/lib/jquery.niftymodals/js/jquery.modalEffects.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&"></script>

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	</head>
	<body>
    <nav class="slideout-menu">
            <div class="slideout-menu-toggle">
                <a role="button"><span class="fa fa-close fa-2x"></span></a>
            </div>
        <?php require_once 'application/views/shared/modals/navigation/_ModalContent.php'; ?>
    </nav>

		<!-- Main Header -->
		<?php require 'header.php'; ?>
		<div id="main-body" class="cl-mcont tab-content">


            <div id="main-content" class="tab-pane active in cont fade row">
                <?php
                if (!empty($layout)) {
                    require "application/views/templates/{$layout}.php";
                } else {
                    require "application/views/templates/_SingleColumnLayout.php";
                };
                ?>
            </div>
<!--            <div class="md-overlay"></div>-->
		</div>

        <!-- Main Footer -->
        <!--< ?php require 'footer.php'; ?> -->

        <!-- Modals-->
<!--        --><?php //require_once 'application/views/shared/modals/navigation/_Modal.php'; ?>

        <!-- Main Scripts -->
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/cleanzone.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/page-data-tables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/home-dashboard.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/page-calendar.js"></script>
		<?php
            require 'scripts.php';

            if (!empty($Script)) {
                echo $Script;
            }
        ?>
    <div class="side-menu-backdrop"></div>
	</body>
</html>
