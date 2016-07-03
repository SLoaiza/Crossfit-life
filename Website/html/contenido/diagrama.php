<link rel="stylesheet" href="../../WEBAPP/Views/Assets/Plugins/styles.css">
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/grouped-categories.js"></script>

<div class="chart-container" id="chart"></div>
<script>
	window.chart = new Highcharts.Chart({
	    chart: {
	        renderTo: "chart",
	        type: "column"
	    },title: {
            style: {
                'fontSize': '1em'
            },
            useHTML: true,
            x: -27,
            y: 8,
            text: ''
        },
	    series: [{
	        data: [<?php 
	            	foreach ($datosdiagrama as $key ) {
	            		echo $key[2].",";
	            	}
	             ?>]
	    }],
	    xAxis: {
	        categories: [{
	            name: "Cantidad De Usuarios Por Plan",
	           
	            categories: [ <?php 
	            	foreach ($datosdiagrama as $key ) {
	            		echo "'".$key[1]."',";
	            	}
	             ?>]
	        }]
	    }
	});
</script>