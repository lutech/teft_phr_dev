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
                height: 200
            });
        });
    </script>
</div>