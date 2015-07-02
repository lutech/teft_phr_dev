<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Service Activities", "billing", "serviceactivities", "fa-medkit", true,  $this->uri);
echo new TabMenuItem("Service Claims", "billing", "serviceclaims", "fa-calculator", true,  $this->uri);
echo new TabMenuItem("Service Budget", "billing", "servicebudget", "fa-usd", true,  $this->uri);
?>
