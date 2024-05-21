$(document).ready(function() {
    var datas =  <?php echo json_encode($datas); ?>;
    var options = {
        chart: {
            renderTo: 'pie_chart',
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Percentage of Students Courses'
        },
         tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            percentageDecimals: 1
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                    dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                    }
                }
            }
        },
        series: [{
            type:'pie',
            name:'Process'
        }]
    }
    myarray = [];
    $.each(datas, function(index, val) {
        myarray[index] = [val.course, val.count];
    });
    options.series[0].data = myarray;
    chart = new Highcharts.Chart(options);
    
});