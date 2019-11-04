<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/Chart.min.js"></script>
    <style type="text/css">
    	#myChart{
    		max-width: 70%
    	}
    </style>
</head>
<body>

<canvas id="myChart"></canvas>
<?php 
  require_once("productos.php");
  $obj = new Productos();


?>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php $obj->etiquetasProducto(); ?>],
        datasets: [{
            label: 'Existencia de Productos',
            data: [<?php $obj->datosProducto(); ?>],
            backgroundColor: 'steelblue',
            borderColor: 'rgb(255,255,0)',
            borderWidth:1

        }]
    },
            
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>




</body>
</html>