<div class="row no-margin">

    <div class="col-lg-1 col-md-0 col-xs-0"></div>
    <div class="col-lg-3 col-md-3 col-sm-12 no-padding">
        <!--            <a  href="#main-content" data-toggle="tab" >cancel</a>-->
        <h1><span class="fa fa-search"></span>&nbsp;&nbsp;Search</h1>

        <div class="form-toolbar">
            <ul class="nav nav-tabs flat-tabs">
                <li class="active">
                    <a href="#clientAdvancedSearchTab" data-toggle="tab">
                        <span class="toolbar-button-label">Clients</span>
                    </a>
                </li>
                <li class="">
                    <a href="#serviceActivityAdvancedSearchTab" data-toggle="tab";>
                    <span class="toolbar-button-label">Service Activities</span>
                    </a>
                </li>
                <li class="">
                    <a href="#claimAdvancedSearchTab" data-toggle="tab";>
                    <span class="toolbar-button-label">Claims</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-7 col-lg-pull-0 col-md-9 col-sm-12">
    </div>
</div>
<div class="row no-margin">
    <div class=" tab-content no-style no-padding">
        <div id="clientAdvancedSearchTab" class="tab-pane active cont fade in">
            <?php require 'search/client.php'; ?>
        </div>
        <div id="serviceActivityAdvancedSearchTab" class="tab-pane cont fade">
            <?php require 'search/serviceactivities.php'; ?>
        </div>
        <div id="claimAdvancedSearchTab" class="tab-pane cont fade">
            <input type="search" id="globalSearch" placeholder="Staff Name/ID" class="form-control"/>
        </div>
    </div>
</div>