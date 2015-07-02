<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("My Health Data", "clinical", "myhealthdata", "fa-stethoscope", true,  $this->uri);
echo new TabMenuItem("Vitals", "clinical", "vitals", "fa-heartbeat", false,  $this->uri);
echo new TabMenuItem("Lab Results", "clinical", "labresults", "fa-flask", false,  $this->uri);
echo new TabMenuItem("Medical Contacts", "clinical", "medicalcontacts", "fa-user-md", false,  $this->uri);
?>
