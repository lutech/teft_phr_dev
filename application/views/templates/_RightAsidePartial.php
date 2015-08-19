<?php
require_once "application/views/templates/menuItem_builder.php";
?>


<div class="row app-left-aside">

    <!--    <label for="globalSearch"><span class="fa fa-search"></span>&nbsp;&nbsp;Search</label>-->
<!--    <input type="search" id="globalSearch" placeholder="eg. person, staff, form, claim #" class="form-control input-large"/>-->

    <ul class="nav menu">

        <?php

            if( file_exists('application/views/'.$area.'/'.$page.'/shared/_SuggestedLinks.php')) {
                require 'application/views/templates/rightsidepanelsections/suggestedlinks.php';
            }

            if( file_exists('application/views/'.$area.'/shared/_RelatedLinks.php')) {
                require 'application/views/templates/rightsidepanelsections/relatedlinks.php';
            }

            if( file_exists('application/views/templates/rightsidepanelsections/helpandsupportlinks.php')) {
                require 'application/views/templates/rightsidepanelsections/relatedlinks.php';
            }

        ?>
    </ul>

</div>