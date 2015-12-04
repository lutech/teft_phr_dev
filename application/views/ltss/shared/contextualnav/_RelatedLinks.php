<?php
    require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("LTSS Overview", "ltss", "overview", "fa fa-list-alt", true, "" , $this->uri); ?>
<?php echo new MenuItem("Active Services", "ltss", "services", "fa fa-medkit", true, "" , $this->uri); ?>
<?php echo new MenuItem("Program Forms", "ltss", "programforms", "fa fa-archive", true, "" , $this->uri); ?>
<?php echo new MenuItem("Quality Assurance", "ltss", "qualityassurance", "fa fa-smile-o", true, "" , $this->uri); ?>