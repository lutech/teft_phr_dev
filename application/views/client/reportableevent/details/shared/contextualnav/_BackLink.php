<?php
    require_once "application/views/templates/sectionHeaderNavItem_builder.php";
?>

<?php echo new SectionHeaderNavItem("Reportable Events", "reportableevents/history", "", true, false, $this->uri); ?>


<!-- Menu Item Arguments
MenuItem( Friendly Label [string], href URL [string], Icon Class (Default "" = Back Arrow) [string], Is Clickable? [bool], Is Hidden? [bool], URI [Do Not Change]  )
-->