<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Emergency Info", "emergency", "emergencyinformation", "fa-ambulance", true,  $this->uri);
echo new TabMenuItem("Emergency Plan", "emergency", "emergencypreparednessplan", "fa-umbrella", false,  $this->uri);
echo new TabMenuItem("Reportable Events", "emergency", "reportableevents", "fa-bullhorn", false,  $this->uri);
?>
