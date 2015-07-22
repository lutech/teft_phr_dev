<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Overview", "ltss", "overview", "fa-list-alt app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Active Services", "ltss", "services", "fa-medkit app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Program Forms", "ltss", "programforms", "fa-archive app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Quality Assurance", "ltss", "qualityassurance", "fa-smile-o app-icon-circle fa-3x", false,  $this->uri, true);
?>
