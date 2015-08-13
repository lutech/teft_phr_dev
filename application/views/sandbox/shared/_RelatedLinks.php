<?php
require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("Service Activities", "sandbox", "billing/serviceactivities", "fa fa-medkit", true, "" , $this->uri); ?>
<?php echo new MenuItem("Service Claims", "sandbox", "billing/serviceclaims", "fa fa-calculator", true, "" , $this->uri); ?>
<?php echo new MenuItem("Service Budget", "sandbox", "billing/servicebudget", "fa fa-usd", true, "" , $this->uri); ?>
