


<!-- 2. Add the JavaScript to initialize the chart on document ready -->
<script type="text/javascript">

	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'container',
				defaultSeriesType: 'line'
			},
			title: {
				text: 'Ponta Delgada - 5r'
			},
			subtitle: {
				text: 'Source: Scott Catalog'
			},
			xAxis: {
				categories: 
				['1944', '1947', '1948', '1952', '1956', '1958', '1965', '1969', '1987', '1992', '1996', '1999', '2005', '2007', '2008', '2009', '2010', '2011', '2012']
			},
			yAxis: {
				title: {
					text: 'Amount in US[$]'
				}
			},
			tooltip: {
				enabled: true,
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
						this.x +': $'+ this.y;
				}
			},
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: true
				}
			},
			series: [{
				name: 'Unused',
				data: [0.15, 0.15, 0.15, 0.15, 0.25, 0.30, 0.50, 0.50, 0.60, 0.50, 0.65, 2.75, 2.75, 2.75, 2.75, 2.75, 2.75, 2.75, 2.75]
			}, {
				name: 'Used',
				data: [0.12, 0.12, 0.12, 0.12, 0.20, 0.25, 0.40, 0.40, 0.60, 0.50, 0.65, 1.75, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60]
			}]
		});
		
		
	});
		
</script>