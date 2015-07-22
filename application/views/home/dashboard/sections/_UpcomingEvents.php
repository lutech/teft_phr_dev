<div class="block">
    <div class="header">
        <h2><span class="fa fa-calendar"></span>&nbsp;Coming up this week <small class="pull-right"><a href="#">Details</a></small></h2>
    </div>
    <div class="content">
        <div id="service-activity-calendar"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#service-activity-calendar').fullCalendar({
                defaultView: 'basicWeek',
                height: 300,
                events: [
                    {
                        id: '1',
                        title: 'Nurse Visit',
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
                        title: 'Dr. Appointment',
                        start: '2015-07-22'
                    },
                    {
                        id: '5',
                        title: 'Dr. Appointment',
                        start: '2015-07-02'
                    },
                    {
                        id: '6',
                        title: 'Service Activity',
                        start: '2015-07-026'
                    }, {
                        id: '7',
                        title: 'Nurse Visit',
                        start: '2015-07-20'
                    }, {
                        id: '8',
                        title: 'Nurse Visit',
                        start: '2015-07-25'
                    }
                ]

            });
        });
    </script>
</div>