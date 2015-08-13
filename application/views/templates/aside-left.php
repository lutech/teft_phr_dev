<?php
require_once "application/views/templates/menuItem_builder.php";
?>


<div class="row app-left-aside">

    <!--    <label for="globalSearch"><span class="fa fa-search"></span>&nbsp;&nbsp;Search</label>-->
<!--    <input type="search" id="globalSearch" placeholder="eg. person, staff, form, claim #" class="form-control input-large"/>-->

    <ul class="nav menu">
        <?php
        if(!empty($bcnav)) {
            echo '
                    <li class="header">
                        <span class="h4">I would like to...</span>
                    </li>
                ';

            require 'application/views/'.$area.'/'.$page.'/shared/_SuggestedLinks.php';
        }
        ?>

        <?php
        if(!empty($bcnav)) {
            echo '
                    <li class="header">
                        <span class="h4">Related links</span>
                    </li>
                ';

            require 'application/views/'.$area.'/shared/_RelatedLinks.php';
        }
        ?>

        <li class="header">
            <span class="h4">Help & Support</span>
        </li>
        <?php echo new MenuItem("FAQ", "pss", "medicationchangerequestreview", "fa fa-question-circle", false, "" , $this->uri); ?>
        <?php echo new MenuItem("Training Resources", "pss", "medicationchangerequestreview", "fa fa-book", false, "" , $this->uri); ?>
        <?php echo new MenuItem("LTSS Help Desk", "pss", "medicationchangerequestreview", "fa fa-phone-square", false, "" , $this->uri); ?>
    </ul>

</div>