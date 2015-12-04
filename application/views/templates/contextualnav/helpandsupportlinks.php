<?php

    echo '
            <li class="header">
                <span class="h4">Help & Support</span>
            </li>
        ';

//    require 'application/views/'.$area.'/'.$contextualnav.'/shared/contextualnav/_HelpAndSupportLinks.php';

require_once "application/views/templates/menuItem_builder.php";
?>

<?php echo new MenuItem("FAQ", "helpandinfo", "faq", "fa fa-question-circle", true, "" , $this->uri); ?>
<?php echo new MenuItem("Training Resources", "helpandinfo", "trainingresources", "fa fa-book", true, "" , $this->uri); ?>
<?php echo new MenuItem("LTSS Help Desk", "helpandinfo", "contactus", "fa fa-phone-square", true, "" , $this->uri); ?>