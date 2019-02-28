
var BePagesDashboard = function() {
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
       
        var chartDashboardLinesCon2 = jQuery('.js-chartjs-dashboard-lines2');

        // Chart Variables
        var  chartDashboardLines2;
        $.ajax({
            url: "http://localhost/graph/data.php",
            method: "GET",
            success: function(data) {
                console.log(data);
                var dt = [];
                var SUM = [];
    
                for(var i in data) {
                    dt.push("Date" + data[i].dt);
                    SUM.push(data[i].cost);
                }
            
        // Lines Charts Data
        
    
        var created = [];
        var amount = [];

        var chartDashboardLinesData2 = {

            labels: dt,
            datasets: [
                {
                    label: 'This Month',
                    fill: true,
                    backgroundColor: 'rgba(156,204,101,.25)',
                    borderColor: 'rgba(156,204,101,1)',
                    pointBackgroundColor: 'rgba(156,204,101,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(156,204,101,1)',
                    data: SUM
                }
            ]
        };

        var chartDashboardLinesOptions2 = {
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMax: 480
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItems, data) {
                        return ' $ ' + tooltipItems.yLabel;
                    }
                }
            }
        };

        // Init Charts
        
   
        if ( chartDashboardLinesCon2.length ) {
            chartDashboardLines2 = new Chart(chartDashboardLinesCon2, { type: 'line', data: chartDashboardLinesData2, options: chartDashboardLinesOptions2 });
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
jQuery(function(){ BePagesDashboard.init(); });