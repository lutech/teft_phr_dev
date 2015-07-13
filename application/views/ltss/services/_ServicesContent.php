
<div class="col-md-4">
    <div class="block">
        <div class="header">
            <h2>Service Activity</h2>
        </div>
        <div class="content">
            <?php require "sections/_ServiceActivities.php" ?>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="block">
        <div class="header">
            <h2>My Plan of Services</h2>
        </div>
        <div class="content">
            <div class="row-fluid">
                <div class="accordion" id="">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <h2 class="h3">
                                <a class="accordion-toggle collapsed" role="heading" data-toggle="collapse" data-parent="#accordion-faq-programs" href="#programFaq1">
                                    Services
                                    <span class="panel-arrow"></span>
                                </a>
                            </h2>
                        </div>
                        <div id="programFaq1" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <?php require "sections/_Services.php" ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <h2 class="h3">
                                <a class="accordion-toggle collapsed" role="heading" data-toggle="collapse" data-parent="#accordion-faq-programs" href="#programFaq2">
                                    Activity Support Plan
                                    <span class="panel-arrow"></span>
                                </a>
                            </h2>
                        </div>
                        <div id="programFaq2" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <?php require "sections/_ActivitySupportPlan.php" ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <h2 class="h3">
                                <a class="accordion-toggle collapsed" role="heading" data-toggle="collapse" data-parent="#accordion-faq-programs" href="#programFaq3">
                                    Goals
                                    <span class="panel-arrow"></span>
                                </a>
                            </h2>
                        </div>
                        <div id="programFaq3" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <?php require "sections/_Goals.php" ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <h2 class="h3">
                                <a class="accordion-toggle collapsed" role="heading" data-toggle="collapse" data-parent="#accordion-faq-programs" href="#programFaq4">
                                    Risks
                                    <span class="panel-arrow"></span>
                                </a>
                            </h2>
                        </div>
                        <div id="programFaq4" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <?php require "sections/_Risks.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
    </div>
    <div class="block">
        <div class="header">
            <h2>My Providers</h2>
        </div>
        <div class="content">
            <?php require "sections/_Providers.php" ?>
        </div>
    </div>
</div>