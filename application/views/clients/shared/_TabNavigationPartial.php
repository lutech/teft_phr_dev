<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Clients", "#", "", "fa-users app-icon-circle fa-3x", true,  $this->uri, true);
//echo new TabMenuItem("Events", "#", "", "fa-calendar app-icon-circle fa-2x", false,  $this->uri, false);
//echo new TabMenuItem("Messages", "#", "", "fa-envelope-o app-icon-circle fa-2x", false,  $this->uri, false);
echo new TabMenuItem("Reportable Events", "reportableevents", "history", "fa-comment-o app-icon-report-problem app-icon-circle fa-3x", true,  $this->uri, true);
?>
