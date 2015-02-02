// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

$(document).foundation();
    $('a.close-risks').click(function(){
    $('#risks').foundation('reveal', 'close');
    
    $(document).foundation({
    "magellan-expedition": {
      active_class: 'active', // specify the class used for active sections
      threshold: 120, // how many pixels until the magellan bar sticks, 0 = auto
      destination_threshold: 200, // pixels from the top of destination for it to be considered active
      throttle_delay: 50, // calculation throttling to increase framerate
      fixed_top: 0, // top distance in pixels assigend to the fixed element on scroll
      offset_by_height: true // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
    }
    });

    
});


$(document).foundation('joyride', 'start');



// Charts etc by svk

function updateDEX() {
  return $.ajax({
    url: "http://api.bitsharesblocks.com/v1/cmc",
    jsonp: "callback",
    dataType: "jsonp",
    data: {
      format: "json"
    },
    type: 'GET'
  });
}

function updateCMC() {
  return $.ajax({
    url: "http://coinmarketcap-nexuist.rhcloud.com/api/bts",
    data: {
      format: "json"
    },
    type: 'GET'
  });
}

function tickerData() {
  // Fetch data
$.when(updateDEX(), updateCMC())
  .done(function(dex, cmc) {
    dex = JSON.parse(dex[0]); 
    cmc = cmc[0];
    var symbols = {
      USD: '$',
      CNY: '¥',
      GOLD: '$',
      BTC: '\u0243',
      EUR: '€'
    };
    // Update tickers
    dex.assets.forEach(function(asset, index) {
      if (symbols[asset.symbol]) {
        $('#' + asset.symbol).text(function(i, oldText) {
          var realPrice = (cmc.price[asset.symbol.toLowerCase()]) ? cmc.price[asset.symbol.toLowerCase()] : cmc.price.usd;
          var decimals = (asset.symbol.indexOf('GOLD') === -1) ? 3 : 0;
          return (realPrice / asset.price).toFixed(decimals) + ' ' + symbols[asset.symbol] + ' / bit' + asset.symbol;
        });
      }
    });
    
    // Show ticker box once done
    $("#ticker").css("visibility", "visible");
    
  })
  .fail(function(error) {
    console.log(error);
  });
}

tickerData();
setInterval(tickerData,5*60*1000);

$(function() {

  var end = new Date();
  var start = new Date();
  start.setDate(start.getDate() - 10);
  var url = "http://api.bitsharesblocks.com/v3/pricehistory/USD/";
  url = url + JSON.stringify({
    start: start,
    end: end
  });

  $.ajax({
    url: url,
    jsonp: "callback",
    dataType: "jsonp",
    type: 'GET',
    success: function(data) {
      data = JSON.parse(data); 
      
      var maxValues = [0, 0];
      data.volume.forEach(function(entry) {
        maxValues[1] = Math.max(entry[1], maxValues[1]);
      });
      maxValues[1] = Math.floor(maxValues[1] * 1.05);
      
      // create the chart
      $('#container').highcharts('StockChart', {
        chart: {
          zoomType: 'x',
          renderTo: 'container',
          style: {
            overflow: 'visible'
          },
          backgroundColor: 'grey',
          margin: [1, 1, 1, 1]
        },
        plotOptions: {
          column: {
            states: {
              hover: {
                color: 'red'
              }
            }
          }
        },

        navigator: {
          enabled: false
        },
        credits: {
          enabled: false
        },

        scrollbar: {
          enabled: false
        },

        title: {
          text: ''
        },
        exporting: {
          enabled: false
        },

        rangeSelector: {
          enabled: false
        },

        xAxis: {
          minRange: 3600 * 1000 * 24 * 7, // one hour
          labels: {
            enabled: false
          },
          lineWidth: 0,
          minorGridLineWidth: 0,
          lineColor: 'transparent',
          minorTickLength: 0,
          tickLength: 0
        },

        yAxis: [{ // Primary yAxis
            title: {
              text: '',
              style: {
                color: Highcharts.getOptions().colors[1]
              }
            },
            labels: {
              enabled: false
            },
            gridLineWidth: 0
          }, { // Secondary yAxis
            opposite: true,
            labels: {
              enabled: false
            },
            gridLineWidth: 0,
            tickLength: 0,
            max: maxValues[1],
            tickInterval: maxValues[1] / 2
          }

        ],
        tooltip: {
          shared: true,
          positioner: function(w, h, point) {
            return {
              x: point.plotX - w / 2,
              y: 1.15 * h
            };
          },
          valueDecimals: 2
        },

        series: [{
          data: data.volume,
          name: 'Volume',
          dataGrouping: {
            enabled: true
          },
          type: 'column',
          yAxis: 1,
          tooltip: {
            valueDecimals: 0,
            valueSuffix: ' BTS'
          }
        }, {
          data: data.price,
          name: 'Price',
          dataGrouping: {
            enabled: true
          },
          tooltip: {
            valueDecimals: 2,
            valueSuffix: ' BTS/USD'
          }
        }]
      });
    }
  });
});


// Particles Background
particlesJS('particles-vision', {
    particles: {
      color: '#00587c',
      shape: 'circle',
      opacity: 0.3,
      size: 2.5,
      size_random: true,
      nb: 100,
      line_linked: {
        enable_auto: true,
        distance: 250,
        color: '#00a9e0',
        opacity: 0.5,
        width: 1,
        condensed_mode: {
          enable: false,
          rotateX: 600,
          rotateY: 600
        }
      },
      anim: {
        enable: true,
        speed: 1.5
      }
    },
    interactivity: {
      enable: false,
      mouse: {
        distance: 250
      },
      detect_on: 'canvas',
      mode: 'grab',
      line_linked: {
        opacity: 0.5
      },
      events: {
        onclick: {
          push_particles: {
            enable: true,
            nb: 4
          }
        }
      }
    },
    retina_detect: true
});



$(".disabled-link").click(function(e){
    e.preventDefault();
    return false;
});