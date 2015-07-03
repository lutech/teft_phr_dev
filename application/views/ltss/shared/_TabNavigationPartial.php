<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Overview", "ltss", "overview", "fa-list-alt", true,  $this->uri);
echo new TabMenuItem("Services", "ltss", "services", "fa-medkit", false,  $this->uri);
echo new TabMenuItem("Program Forms", "ltss", "programforms", "fa-archive", false,  $this->uri);
echo new TabMenuItem("Quality Assurance", "ltss", "qualityassurance", "fa-smile-o", false,  $this->uri);
?>
