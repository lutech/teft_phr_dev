<?php
    require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("My Health Data", "clinical", "myhealthdata", "fa fa-stethoscope", true, "" , $this->uri); ?>
<?php echo new MenuItem("Vitals", "clinical", "vitals", "fa fa-heartbeat", true, "" , $this->uri); ?>
<?php echo new MenuItem("Lab Results", "clinical", "labresults", "fa fa-flask", true, "" , $this->uri); ?>