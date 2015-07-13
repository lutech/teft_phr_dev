<div class="col-md-12">
    <div class="form-toolbar container">
        <ul class="nav nav-tabs flat-tabs">
            <li>
                <a href="#" aria-expanded="true">
                    <span class="fa fa-comment-o app-icon-report-problem fa-2x"></span>
                    <span class="toolbar-button-label">Report a Problem</span>
                </a>
            </li>
        </ul>
        <div class="block app-block">
            <div class="header no-border">
                <h1>Service Activities</h1>
            </div>
            <div class="content">
                <div id="service-activity-calendar"></div>
            </div>
            <div class="content no-padding">
                <?php require "_ServiceActivitiesContent.php" ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#service-activity-calendar').fullCalendar({
            defaultView: 'basicWeek',
            height: 200
        });
    });
</script>