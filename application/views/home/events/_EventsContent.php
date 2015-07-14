<div class="col-md-5">
    <?php require 'sections/_EventsFeed.php'; ?>
</div>
<div class="col-md-7">
    <?php require 'sections/_Calendar.php'; ?>
    <hr/>
    <?php require 'sections/_Reminders.php'; ?>
</div>

<?php $Script = '
    <script type="text/javascript">

       $(document).ready(function(){
            $("#eventCalendar").fullCalendar({
                //defaultView: "basicMonth",
                height: 400
            });
        });

    </script>
'?>