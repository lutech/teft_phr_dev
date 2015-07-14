var App = (function () {

  App.dashboard = function( opts ){
    'use strict'

  	var options = {};
  	var defaults = {
  		introTour: true
  	};

  	//Extend default conf
  	$.extend( options, defaults, opts );

    /*Sparklines*/
      $(".spk1").sparkline([2,4,3,6,7,5,8,9,4,2,6,8,8,9,10], { type: 'bar', width: '80px', barColor: '#4A8CF7'});
      $(".spk2").sparkline([4,6,7,7,4,3,2,1,4,4 ,5,6,5], { type: 'discrete', width: '80', lineColor: '#4A8CF7',thresholdValue: 4,thresholdColor: '#ff0000'});
      $(".spk3").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
        type: 'line',
        lineColor: '#258FEC',
        fillColor: '#4A8CF7',
        spotColor: false,
        width: '80px',
        minSpotColor: false,
        maxSpotColor: false,
        highlightSpotColor: '#1e7ac6',
        highlightLineColor: '#1e7ac6'
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

      function showTooltip(x, y, contents) {
        $("<div id='tooltip'>" + contents + "</div>").css({
          position: "absolute",
          display: "none",
          top: y + 5,
          left: x + 5,
          border: "1px solid #000",
          padding: "5px",
          'color':'#fff',
          'border-radius':'2px',
          'font-size':'11px',
          "background-color": "#000",
          opacity: 0.80
        }).appendTo("body").fadeIn(200);
      } 



      // Heart Rates Data
      //
      var heartRates = [
          [1, 72],
          [2, 71],
          [3, 69],
          [4, 68],
          [5, 72]
      ];

      if ($('#heartRateChart').size() != 0) {
        $('#heartRateChart_loading').hide();
        $('#heartRateChart_content').show();
        var plot_statistics = $.plot($("#heartRateChart"), [{
          data: heartRates,
          label: "Heart Rates"
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
            colors: ["#F74417", "#FFFFFF", "#52e136"],
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
        $("#heartRateChart").bind("plothover", function (event, pos, item) {
        
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


      // Blood Pressure Data
      //
      var diastolicData = [
          [1, 95],
          [2, 95],
          [3, 90],
          [4, 90],
          [5, 95]
      ];

      var systolicData = [
          [1, 160],
          [2,155],
          [3, 155],
          [4, 150],
          [5, 155]
      ];
      var plot_statistics2 = $.plot($("#ltssBloodPressure"), [{
          data: systolicData,
          label: "Systolic"
      }, {
          data: diastolicData,
          label: "Diastolic"
      }
      ], {
          series: {
              bars: {
                  show: true,
                  barWidth: 0.7,
                  lineWidth: 1,
                  fill: true,
                  hoverable: true,
                  fillColor: {
                      colors: [{
                          opacity: 0.85
                      }, {
                          opacity: 0.85
                      }
                      ]
                  }
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
          colors: ["#e67653", "#FFFFFF", "#52e136"],
          xaxis: {
              ticks: 11,
              tickDecimals: 0
          },
          yaxis: {
              ticks: 6,
              tickDecimals: 0
          }
      });

      $("#ltssBloodPressure").bind("plothover", function (event, pos, item) {

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

      // Weight Data
      //
      var weightData = [
          [1, 175],
          [2, 174],
          [3, 174],
          [4, 173],
          [5, 174]
      ];

      if ($('#weightData').size() != 0) {
          $('#weightChart_loading').hide();
          $('weightChart_content').show();
          var plot_statistics3 = $.plot($("#weightData"), [{
              data: weightData,
              label: "Weight"
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
              colors: ["#005299", "#FFFFFF", "#52e136"],
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
          $("#weightData").bind("plothover", function (event, pos, item) {
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


      // Budget Tracker
      //
      var budgets = [
          [1, 78589],
          [2, 68459],
          [3, 67895],
          [4, 55489],
          [5, 47859]
      ];

      if ($('#budgetTracker').size() != 0) {
          $('#heartRateChart_loading').hide();
          $('#heartRateChart_content').show();
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


      //LTSS Goals
      //
      /*COM Chart*/
      var goalsCompleted = [
          [1,10],
          [2, 10],
          [3,8],
          [4, 11],
          [5, 7],
          [6, 6],
          [7, 6],
          [8, 4],
          [9, 5]
      ];

      var plot_statistics = $.plot($("#ltssGoals"), [{
          data: goalsCompleted, showLabels: true, labels: goalsCompleted, labelPlacement: "below", canvasRender: true, cColor: "#FFFFFF"
      }
      ], {
          series: {
              lines: {
                  show: true,
                  lineWidth: 2,
                  fill: true,
                  fillColor: {
                      colors: [{
                          opacity: 0.25
                      }, {
                          opacity: 0.25
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
              show:false,
              margin: 5,
              labelMargin: 10,
              axisMargin: 10,
              hoverable: true,
              clickable: true,
              tickColor: "rgba(255,255,255,0.22)",
              borderWidth: 0
          },
          colors: ["#50ACFE"],
          xaxis: {
              autoscaleMargin: 0.04,
              ticks: 11,
              tickDecimals: 0
          },
          yaxis: {
              autoscaleMargin: 0.2,
              ticks: 5,
              tickDecimals: 0
          }
      });

      //LTSS Application Status
      //

      /*Jquery Easy Pie Chart*/
      $('#ltssAppStatus').easyPieChart({
          lineWidth: 7,
          animate: { duration: 600, enabled: true },
          size: 150,
          scaleLength: 6,
          onStep: function(f, t, val){//Update current value while animation
              var height = $("canvas", this.el).height();
              $("span", this.el).html(parseInt(val) + "%").css({"line-height": height + "px"});
          }
      });
  };

  return App;
})(App || {});
