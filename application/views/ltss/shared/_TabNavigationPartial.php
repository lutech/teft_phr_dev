<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Questionnaires", "ltss", "questionnaires", "fa-check-square-o", true,  $this->uri);
echo new TabMenuItem("Services", "ltss", "services", "fa-medkit", false,  $this->uri);
echo new TabMenuItem("Application Forms", "ltss", "applicationforms", "fa-archive", false,  $this->uri);
echo new TabMenuItem("Quality Assurance", "ltss", "qualityassurance", "fa-smile-o", false,  $this->uri);
?>
