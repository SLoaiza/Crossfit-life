
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="../../WEBAPP/Views/Assets/Plugins/grouped-categories.js"></script>

<div class="chart-container" id="chart"></div>
<script>
	window.chart = new Highcharts.Chart({
	    chart: {
	    	name:"usuarios",
	        renderTo: "chart",
	        type: "column"
	    },title: {
            style: {
                'fontSize': '1em'
            },
            useHTML: true,
            text: ''
        },
	    series: [{
	    	style: {
                'fontSize': '1em'
            },
	    	name:"usuarios",
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