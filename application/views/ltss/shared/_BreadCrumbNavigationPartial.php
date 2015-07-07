<?php
require "application/views/templates/menuItem_builder.php";
?>

<li>
    <?php echo new MenuItem("Quality Assurance Forms", "ltss", "qualityassurance", null, null, null, true, false, null, $this->uri); ?>
    <ul>
        <li>
            <?php echo new MenuItem("All CAHPS Surveys", "ltss", "qualityassurance", "cahpssurvey", null, null, true, true, null, $this->uri); ?>
            <ul>
                <li>
                    <?php echo new MenuItem("CAHPS Survey Details", "ltss", "qualityassurance", "cahpssurvey", "details", null, true, true, null, $this->uri); ?>
                </li>
            </ul>
        </li>
    </ul>
</li>


<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Third Level Page [string], Fourth Level Page [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->