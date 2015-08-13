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
        <div class="block app-block app-heading-block">
            <div class="header">
                <h1><span class="fa fa-usd"></span> Service Budget</h1>
            </div>
        </div>
        <div class="block app-block">
            <div class="content no-padding">
                <?php require "_ServiceBudgetContent.php" ?>
            </div>
        </div>
    </div>
</div>

<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.budgetTracker();
        });

var App = (function () {

    App.budgetTracker = function( opts ){
        "use strict"

        var options = {};
        var defaults = {
            introTour: true
        };

        //Extend default conf
        $.extend( options, defaults, opts );

        /*Sparklines*/
        $(".spk1").sparkline([2,4,3,6,7,5,8,9,4,2,6,8,8,9,10], { type: "bar", width: "80px", barColor: "#4A8CF7"});
        $(".spk2").sparkline([4,6,7,7,4,3,2,1,4,4 ,5,6,5], { type: "discrete", width: "80", lineColor: "#4A8CF7",thresholdValue: 4,thresholdColor: "#ff0000"});
        $(".spk3").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
            type: "line",
            lineColor: "#258FEC",
            fillColor: "#4A8CF7",
            spotColor: false,
            width: "80px",
            minSpotColor: false,
            maxSpotColor: false,
            highlightSpotColor: "#1e7ac6",
            highlightLineColor: "#1e7ac6"
        });

        /*Dashboard Charts*/
        if (!jQuery.plot) {
            return;
        }

        var data = [];
        var totalPoints = 250;
        // random data generator for plot charts

        function getRandomData() {
            if (data.length > 0) data = data.slice(1);
            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0) y = 0;
                if (y > 100) y = 100;
                data.push(y);
            }
            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
            return res;
        }



        // Budget Tracker
        //
        var budgets = [
            [1, 78589],
            [2, 68459],
            [3, 67895],
            [4, 55489],
            [5, 47859]
        ];

        if ($("#budgetTracker").size() != 0) {
            $("#heartRateChart_loading").hide();
            $("#heartRateChart_content").show();
            var plot_statistics = $.plot($("#budgetTracker"), [{
                data: budgets,
                label: "Budget"
            }
            ], {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.01
                            }
                            ]
                        }
                    },
                    points: {
                        show: true
                    },
                    shadowSize: 2
                },
                legend:{
                    show: false
                },
                grid: {
                    labelMargin: 10,
                    axisMargin: 500,
                    hoverable: true,
                    clickable: true,
                    tickColor: "rgba(255,255,255,0.22)",
                    borderWidth: 0
                },
                colors: ["#0C8800", "#FFFFFF", "#52e136"],
                xaxis: {
                    ticks: 11,
                    tickDecimals: 0
                },
                yaxis: {
                    ticks: 5,
                    tickDecimals: 0
                }
            });

            var previousPoint = null;
            $("#budgetTracker").bind("plothover", function (event, pos, item) {

                var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";

                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;
                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);
                        showTooltip(item.pageX, item.pageY,
                            item.series.label + " of " + x + " = " + y);
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        }


    };

    return App;
})(App || {});

</script>

'?>