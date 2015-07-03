<?php
require "application/views/templates/tabMenuItem_builder.php";

echo new TabMenuItem("Dashboard", "home", "dashboard", "fa-th-large", true,  $this->uri);
echo new TabMenuItem("Events", "home", "events", "fa-calendar", false,  $this->uri);
echo new TabMenuItem("Messages", "home", "messages", "fa-envelope-o", false,  $this->uri);
echo new TabMenuItem("My Profile", "home", "myprofile", "fa-user", false,  $this->uri);
echo new TabMenuItem("Contacts", "home", "contacts", "fa-users", false,  $this->uri);
echo new TabMenuItem("Notes & Documents", "home", "notesanddocuments", "fa-file-text-o", false,  $this->uri);
?>
