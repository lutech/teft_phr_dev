<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("FAQ", "helpandinfo", "faq", "fa-question-circle", true,  $this->uri);
echo new TabMenuItem("Programs & Services", "helpandinfo", "programsandservices", "fa-info-circle", false,  $this->uri);
echo new TabMenuItem("Training Resources", "helpandinfo", "trainingresources", "fa-book", false,  $this->uri);
echo new TabMenuItem("Contact Us", "helpandinfo", "contactus", "fa-phone-square", false,  $this->uri);
?>
