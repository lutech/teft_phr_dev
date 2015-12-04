<?php
require_once "application/views/templates/menuItem_builder.php";
?>


<div class="row app-left-aside">

    <!--    <label for="globalSearch"><span class="fa fa-search"></span>&nbsp;&nbsp;Search</label>-->
<!--    <input type="search" id="globalSearch" placeholder="eg. person, staff, form, claim #" class="form-control input-large"/>-->

    <ul class="nav menu">

        <?php

            if( file_exists('application/views/'.$area.'/'.$contextualnav.'/shared/contextualnav/_SuggestedLinks.php')) {
                require 'application/views/templates/contextualnav/suggestedlinks.php';
            }

            if( file_exists('application/views/'.$area.'/'.$contextualnav.'/shared/contextualnav/_RelatedLinks.php')) {
                require 'application/views/templates/contextualnav/relatedlinks.php';
            }

//            if( file_exists('application/views/'.$area.'/'.$contextualnav.'/shared/contextualnav/_HelpAndSupportLinks.php')) {
//                require 'application/views/templates/contextualnav/helpandsupportlinks.php';
//            }

            require 'application/views/templates/contextualnav/helpandsupportlinks.php';

        ?>
    </ul>

</div>