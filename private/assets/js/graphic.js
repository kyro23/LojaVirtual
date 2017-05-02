      Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Produtos <br> vendidos',
        align: 'center',
        verticalAlign: 'top',
        y: 20
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'black'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '100%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '60%',
        data: [
            ['Firefox',   20.38],
            ['IE',       36.33],
            ['Chrome', 24.03],
            ['Opera',    19.26],
            {
                name: '',
                y: 0.2,
                dataLabels: {
                    enabled: true
                }
            }
        ]
    }]
});

     Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Produtos <br>em<br> estoque',
        align: 'center',
        verticalAlign: 'top',
        y: 20
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'black'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '100%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '60%',
        data: [
            ['Firefox',   10.38],
            ['IE',       56.33],
            ['Chrome', 21.14],
            ['Opera',     21.14],
            {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
});

       Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Pedidos',
        align: 'center',
        verticalAlign: 'top',
        y: 20
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'black'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '100%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '60%',
        data: [
            ['Firefox',   10.38],
            ['IE',       20.3],
            ['Chrome', 24.03],
            ['Safari',    25.5],
            ['Opera',     25.2],
            {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
});

   Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Produtos <br> Novos',
        align: 'center',
        verticalAlign: 'top',
        y: 20
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'black'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '100%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '60%',
        data: [
            ['Firefox',   50.38],
            ['IE',       24.33],
            ['Chrome', 15.03],
            ['Safari',    15.77],
            ['Opera',     34.91],
            {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
});