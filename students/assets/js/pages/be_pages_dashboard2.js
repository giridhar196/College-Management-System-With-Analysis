
var BePagesDashboard2 = function() {
    // Chart.js Charts, for more examples you can check out http://www.chartjs.org/docs
    var initDashboardChartJS = function () {
        // Set Global Chart.js configuration
        Chart.defaults.global.defaultFontColor              = '#555555';
        Chart.defaults.scale.gridLines.color                = "transparent";
        Chart.defaults.scale.gridLines.zeroLineColor        = "transparent";
        Chart.defaults.scale.display                        = false;
        Chart.defaults.scale.ticks.beginAtZero              = true;
        Chart.defaults.global.elements.line.borderWidth     = 2;
        Chart.defaults.global.elements.point.radius         = 5;
        Chart.defaults.global.elements.point.hoverRadius    = 7;
        Chart.defaults.global.tooltips.cornerRadius         = 3;
        Chart.defaults.global.legend.display                = false;

        // Chart Containers
        var chartDashboardLinesCon  = jQuery('.js-chartjs-dashboard-lines');
        

        // Chart Variables
        var chartDashboardLines;
        $.ajax({
            url: "http://localhost/graph/followersdata.php",
            method: "GET",
            success: function(data) {
                console.log(data);
                var branch = [];
                var price = [];
    
                for(var i in data) {
                    branch.push("Date" + data[i].branch);
                    price.push(data[i].price);
                }
            
        // Lines Charts Data
        var chartDashboardLinesData = {
            labels: branch,
            datasets: [
                {
                    label: 'Based On Branch',
                    fill: true,
                    backgroundColor: 'rgba(66,165,245,.25)',
                    borderColor: 'rgba(66,165,245,1)',
                    pointBackgroundColor: 'rgba(66,165,245,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(66,165,245,1)',
                    data: price
                }
            ]
        };
    
        var chartDashboardLinesOptions = {
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMax: 50
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItems, data) {
                        return ' ' + tooltipItems.yLabel + ' Sales';
                    }
                }
            }
        };
    
        
        // Init Charts
        if ( chartDashboardLinesCon.length ) {
            chartDashboardLines  = new Chart(chartDashboardLinesCon, { type: 'line', data: chartDashboardLinesData, options: chartDashboardLinesOptions });
        }
   
        
    }});
    };

    return {
        init: function () {
            // Init Chart.js Charts
            initDashboardChartJS();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BePagesDashboard2.init(); });
