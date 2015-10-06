<?php
    require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("Messages", "home", "messages", "fa fa-envelope", false, "" , $this->uri); ?>
<?php echo new MenuItem("Services & Claims", "sandbox", "billing/serviceactivities", "fa fa-medkit", false, "" , $this->uri); ?>
<?php echo new MenuItem("Calendar", "home", "events", "fa fa-calendar", false, "" , $this->uri); ?>