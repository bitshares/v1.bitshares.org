// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

$(document).foundation();
$('a.close-risks').click(function() {
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



$(".disabled-link").click(function(e) {
  e.preventDefault();
  return false;
});


// Charts etc by svk

Highcharts.SparkLine = function(options, callback) {
  var chart, defaultOptions;
  defaultOptions = {
    chart: {
      renderTo: (options.chart && options.chart.renderTo) || this,
      backgroundColor: null,
      borderWidth: 0,
      type: "area",
      margin: [0, 0, 0, 0],
      padding: 0,
      height: 40,
      style: {
        overflow: "visible"
      },
      skipClone: true,
      events: {
        click: function() {
          return options.chart_click();
        }
      },
      container: {
        onclick: null
      }
    },
    title: {
      text: ""
    },
    credits: {
      enabled: false
    },
    xAxis: {
      type: "datetime",
      minRange: 3600 * 1000,
      labels: {
        enabled: false
      },
      title: {
        text: null
      },
      startOnTick: false,
      endOnTick: false,
      tickPositions: []
    },
    legend: {
      enabled: false
    },
    tooltip: {
      enabled: false
    },
    plotOptions: {
      series: {
        animation: false,
        lineWidth: 1,
        shadow: false,
        states: {
          hover: {
            enabled: false
          }
        },
        marker: {
          enabled: false
        },
        fillOpacity: 0.25,
        point: {
          events: {
            click: function() {
              return options.chart_click();
            }
          }
        }
      }
    }
  };
  options = Highcharts.merge(defaultOptions, options);
  chart = new Highcharts.Chart(options, callback);
  return chart;
};

angular.module('app', [])

.factory('Api', ['$http', '$q', function($http, $q) {

  return {
    updateDEX: function() {
      var deferred = $q.defer();
      $http({
          method: 'JSONP',
          url: 'https://api.bitsharesblocks.com/v2/cmc?callback=JSON_CALLBACK',
          cache: true
        })
        .success(function(result) {
          deferred.resolve(result);
        })
        .error(function(error) {
          deferred.reject(error);
        });
      return deferred.promise;

    },
    updateCMC: function() {
      var deferred = $q.defer();
      $http({
          method: 'GET',
          url: 'https://coinmarketcap-nexuist.rhcloud.com/api/bts',
          cache: true
        })
        .success(function(result) {
          deferred.resolve(result);
        })
        .error(function(error) {
          deferred.reject(error);
        });
      return deferred.promise;

    },
    priceHistory: function(symbol) {
      var deferred = $q.defer();
      var days = 10; // Get pricehistory for last 10 days
      var url = "https://api.bitsharesblocks.com/v3/pricehistory/" + symbol + "/";
      url = url + JSON.stringify({
        days: days
      });
      $http({
          method: 'JSONP',
          url: url + '?callback=JSON_CALLBACK',
          cache: true
        })
        .success(function(result) {
          deferred.resolve(result);
        })
        .error(function(error) {
          deferred.reject(error);
        });

      return deferred.promise;
    }
  };


}])

.directive("marketThumbnail", function() {
  return {
    /*jshint multistr: true */
    template: '<div class="market-thumbnail">\
               <center><span class="spark-title">{{ title }}</span></center>\
               <div>\
                <span class="high"><label class="chart-label">H:</label> {{ market.high_price | number: 2 }}</span>\
                <span class="low"><label class="chart-label">L:</label> {{ market.min_price | number: 2 }}</span>\
                <span class="change pull-right" ng-class="{\'change-positive\':market.change >=0, \'change-negative\':market.change < 0}">\
                <span ng-if="market.change>0">+</span>{{ market.change | number: 2 }}%</span>\
               </div>\
               <div class="volume"><label class="chart-label">V:</label> {{market.volume | number : 0}} {{market.asset_base_symbol}}</div>\
               <div class="sparkchart"></div>\
               </div>',
    restrict: "E",
    replace: true,
    scope: {
      name: "="
    },
    controller: chartsCtrl
  };
})

.controller('tickerCtrl', ['$scope', '$q', '$interval', 'Api', function($scope, $q, $interval, Api) {

  var symbols = {
    USD: '$',
    CNY: '¥',
    GOLD: '$',
    BTC: 'Ƀ',
    EUR: '€'
  };

  $scope.featured_markets = ["USD", "CNY", "BTC", "SILVER", "GOLD", "EUR"];

  function updateTicker() {
    $q.all([
        Api.updateDEX(),
        Api.updateCMC()
      ])
      .then(function(results) {

        var dex = results[0];
        var cmc = results[1];
        $scope.price = {};
        dex.assets.forEach(function(asset, index) {
          if (symbols[asset.symbol]) {
            var realPrice = (cmc.price[asset.symbol.toLowerCase()]) ? cmc.price[asset.symbol.toLowerCase()] : cmc.price.usd;
            var decimals = (asset.symbol.indexOf('GOLD') === -1) ? 3 : 0;
            $scope.price[asset.symbol] = (realPrice / asset.price).toFixed(decimals) + ' ' + symbols[asset.symbol] + ' / bit' + asset.symbol;
          }
        });
      })
      .catch(function(err) {
        console.log('dex error:', err);
      });
  }

  updateTicker();
  var tickerInterval = $interval(updateTicker, 1000 * 60);

  $scope.$on('$destroy', function() {
    // Remove intervals
    $interval.cancel(tickerInterval);
  });



}]);

chartsCtrl.$inject = ['$scope', '$element', '$attrs', '$q', 'Api'];

function chartsCtrl($scope, $element, $attrs, $q, Api) {
  var chart_click, market, market_symbols;

  chart_click = function() {
    return;
  };

  market = {};
  market.quantity_symbol = $scope.name;
  market.base_symbol = 'BTS';
  market.asset_quantity_symbol = market.quantity_symbol.replace("Bit", "");
  market.asset_base_symbol = market.base_symbol.replace("Bit", "");
  market.price_symbol = "" + market.base_symbol + "/" + market.quantity_symbol;
  market.inverse_price_symbol = "" + market.quantity_symbol + "/" + market.base_symbol;

  $scope.title = 'Bit' + $scope.name + ':BTS';

  return Api.priceHistory(market.quantity_symbol).then(function(result) {
    var price_history_call_promise, start_time;

    if (result) {

      var area_color, c, h, highest_bid, l, lowest_ask, o, oc_avg, series, t, time, yAxis, _i, _len;
      if (!result || result.length === 0) {
        return;
      }
      market.ohlc_data = [];
      market.volume_data = [];
      market.volume = 0.0;
      market.last_price = 0.0;
      market.max_volume = 0;
      market.min_price = 99999999;
      market.high_price = 0;
      market.open = result.price[0][1];
      market.close = market.open;
      for (_i = 0, _len = result.price.length; _i < _len; _i++) {
        t = result.price[_i];
        time = t[0];
        o = t[1];
        market.last_price = c = t[4];
        lowest_ask = t[3];
        highest_bid = t[2];
        h = lowest_ask > highest_bid ? lowest_ask : highest_bid;
        l = lowest_ask < highest_bid ? lowest_ask : highest_bid;
        if (o > h) {
          h = o;
        }
        if (c > h) {
          h = c;
        }
        if (o < l) {
          l = o;
        }
        if (c < l) {
          l = c;
        }
        oc_avg = (o + c) / 2.0;
        if (h / oc_avg > 1.25) {
          h = 1.10 * Math.max(o, c);
        }
        if (oc_avg / l > 1.25) {
          l = 0.90 * Math.min(o, c);
        }

        t.volume = result.volume[_i];
        market.ohlc_data.push([time, oc_avg]);
        market.volume_data.push([t.volume[0], t.volume[1]]);
        market.volume += t.volume[1];
        market.max_volume = Math.max(t.volume[1], market.max_volume);
        market.min_price = Math.min(oc_avg, market.min_price);
        market.high_price = Math.max(oc_avg, market.high_price);
        market.close = c;
      }
      market.max_volume = 3 * Math.floor(market.max_volume);
      market.change = (market.close - market.open) / market.open * 100;

      $scope.market = market;
      area_color = market.change > 0 ? '#28a92e' : '#c90808';
      series = [{
        data: market.volume_data,
        pointStart: 1,
        name: 'Volume',
        type: 'column',
        yAxis: 1,
        dataGrouping: {
          enabled: true
        },
        tooltip: {
          valueDecimals: 0,
          valueSuffix: ' BTS'
        }
      }, {
        data: market.ohlc_data,
        pointStart: 1,
        name: 'Price',
        dataGrouping: {
          enabled: true
        },
        tooltip: {
          valueDecimals: 2,
          valueSuffix: ' BTS/' + market.asset_quantity_symbol
        },
        min: market.min_price,
        color: area_color
      }];
      yAxis = [{
        opposite: true,
        labels: {
          enabled: false
        },
        title: {
          text: null
        },
        gridLineWidth: 0,
        min: 0.98 * market.min_price
      }, {
        endOnTick: false,
        startOnTick: false,
        labels: {
          enabled: false
        },
        title: {
          text: null
        },
        gridLineWidth: 0
      }];
      return $(".sparkchart", $element).highcharts('SparkLine', {
        series: series,
        yAxis: yAxis,
        chart_click: chart_click
      });
    }
  });
}
