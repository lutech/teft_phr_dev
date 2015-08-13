<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Clock In/Out", "#", "", "fa-clock-o app-icon-circle fa-3x", true,  $this->uri, true, true);
echo new TabMenuItem("Service Activities", "sandbox/billing", "serviceactivities", "fa-medkit app-icon-circle fa-3x", true,  $this->uri, true, true);
echo new TabMenuItem("Service Claims", "sandbox/billing", "serviceclaims", " fa-file-o app-icon-circle app-icon-service-claim fa-3x", true,  $this->uri, true, true);
//echo new TabMenuItem("Service Budget", "billing", "servicebudget", "fa-usd app-icon-circle fa-3x", true,  $this->uri, true);
?>
