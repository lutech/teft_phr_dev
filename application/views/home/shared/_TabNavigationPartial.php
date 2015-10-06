<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Dashboard", "home", "dashboard", "fa-home app-icon-circle fa-2x", true,  $this->uri, false);
echo new TabMenuItem("Events", "home", "events", "fa-calendar app-icon-circle fa-2x", true,  $this->uri, false);
echo new TabMenuItem("Messages", "home", "messages", "fa-envelope-o app-icon-circle fa-2x", true,  $this->uri, false);
echo new TabMenuItem("Clients", "#", "", "fa-users app-icon-circle fa-2x", false,  $this->uri, false);
//echo new TabMenuItem("My Profile", "home", "myprofile", "fa-user app-icon-circle fa-2x", false,  $this->uri, false);
//echo new TabMenuItem("Contacts", "home", "contacts", "fa-users app-icon-circle fa-2x", false,  $this->uri, false);
//echo new TabMenuItem("Notes & Documents", "home", "notesanddocuments", "fa-file-text-o app-icon-circle fa-2x", false,  $this->uri, false);
?>
