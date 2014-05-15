<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/highcharts.js"></script>

<!-- 1a) Optional: add a theme file -->
<script type="text/javascript" src="/js/themes/grid.js"></script>


<!-- 1b) Optional: the exporting module -->
<script type="text/javascript" src="/js/modules/exporting.js"></script>

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
				text: 'Ponta Delgada - 20r'
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
				data: [0.50, 0.50, 0.50, 0.50, 0.60, 0.90, 1.00, 1.00, 2.75, 2.00, 2.00, 3.25, 3.50, 3.50, 3.50, 3.50, 3.50, 3.50, 3.50]
			}, {
				name: 'Used',
				data: [0.50, 0.50, 0.50, 0.50, 0.60, 0.75, 0.85, 0.90, 1.40, 1.25, 1.50, 2.00, 2.25, 2.25, 2.25, 2.25, 2.25, 2.25, 2.25]
			}]
		});
		
		
	});
		
</script>