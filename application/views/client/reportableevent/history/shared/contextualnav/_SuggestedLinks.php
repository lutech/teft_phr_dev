<?php
    require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("Report an Event", "pss", "medicationchangerequestreview", "fa fa-plus-circle", false, "" , $this->uri); ?>
<?php echo new MenuItem("Find a Client", "pss", "medicationchangerequestreview", "fa fa-search", false, "" , $this->uri); ?>
<?php echo new MenuItem("Find a Staff Member", "pss", "medicationchangerequestreview", "fa fa-search", false, "" , $this->uri); ?>