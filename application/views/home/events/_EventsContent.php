<div class="col-md-5">
    <?php require "sections/_EventsFeed.php"; ?>
</div>
<div class="col-md-7">
    <?php require "sections/_Calendar.php"; ?>
    <hr/>
    <?php require "sections/_Reminders.php"; ?>
</div>

<?php $Script = "
    <script type='text/javascript'>

       $(document).ready(function(){
            $('#eventCalendar').fullCalendar({
                //defaultView: 'basicMonth',
                height: 400,
                events: [
                    {
                        id: '1',
                        title: 'Service Activity',
                        start: '2015-07-14'
                    },
                    {
                        id: '2',
                        title: 'Service Activity',
                        start: '2015-07-10'
                    },
                    {
                        id: '3',
                        title: 'Service Activity',
                        start: '2015-07-08'
                    },
                    {
                        id: '4',
                        title: 'Service Activity',
                        start: '2015-07-22'
                    },
                    {
                        id: '5',
                        title: 'Service Activity',
                        start: '2015-07-02'
                    },
                    {
                        id: '6',
                        title: 'Service Activity',
                        start: '2015-07-026'
                    }, {
                        id: '7',
                        title: 'Service Activity',
                        start: '2015-07-20'
                    }, {
                        id: '8',
                        title: 'Service Activity',
                        start: '2015-07-25'
                    }, {
                        id: '9',
                        title: 'Service Activity',
                        start: '2015-06-29'
                    }, {
                        id: '10',
                        title: 'Service Activity',
                        start: '2015-07-28'
                    }, {
                        id: '11',
                        title: 'Service Activity',
                        start: '2015-07-29'
                    }, {
                        id: '12',
                        title: 'Service Activity',
                        start: '2015-07-31'
                    }
                ]
                
            });
        });

    </script>
"?>