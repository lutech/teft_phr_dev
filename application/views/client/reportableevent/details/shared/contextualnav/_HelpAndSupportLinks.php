<?php
    require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("FAQ", "pss", "medicationchangerequestreview", "fa fa-question-circle", false, "" , $this->uri); ?>
<?php echo new MenuItem("Training Resources", "pss", "medicationchangerequestreview", "fa fa-book", false, "" , $this->uri); ?>
<?php echo new MenuItem("LTSS Help Desk", "pss", "medicationchangerequestreview", "fa fa-phone-square", false, "" , $this->uri); ?>