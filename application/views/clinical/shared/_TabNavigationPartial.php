<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("My Health Data", "clinical", "myhealthdata", "fa-stethoscope app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Vitals", "clinical", "vitals", "fa-heartbeat app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Lab Results", "clinical", "labresults", "fa-flask app-icon-circle fa-3x", true,  $this->uri, true);
//echo new TabMenuItem("Medical Contacts", "clinical", "medicalcontacts", "fa-user-md app-icon-circle fa-3x", false,  $this->uri, true);
?>
