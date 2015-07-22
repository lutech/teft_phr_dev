<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Emergency Info", "emergency", "emergencyinformation", "fa-ambulance app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Emergency Plan", "emergency", "emergencypreparednessplan", "fa-umbrella app-icon-circle fa-3x", false,  $this->uri, true);
?>
