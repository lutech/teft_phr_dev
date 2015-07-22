<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("FAQ", "helpandinfo", "faq", "fa-question-circle app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Programs & Services", "helpandinfo", "programsandservices", "fa-info-circle app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Training Resources", "helpandinfo", "trainingresources", "fa-book app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Contact Us", "helpandinfo", "contactus", "fa-phone-square app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Reportable Events", "emergency", "reportableevents", "fa-bullhorn app-icon-circle fa-3x", false,  $this->uri, true);
?>
