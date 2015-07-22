<?php
require_once "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Dashboard", "home", "dashboard", "fa-home app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Messages", "home", "messages", "fa-envelope-o app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Events", "home", "events", "fa-calendar app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("My Profile", "home", "myprofile", "fa-user app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Contacts", "home", "contacts", "fa-users app-icon-circle fa-3x", false,  $this->uri, true);
echo new TabMenuItem("Notes & Documents", "home", "notesanddocuments", "fa-file-text-o app-icon-circle fa-3x", true,  $this->uri, true);
echo new TabMenuItem("Settings & Accessibility", "home", "settings", "fa-cog app-icon-circle fa-3x", false,  $this->uri, true);
?>
