<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="{{asset('adm/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('adm/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('adm/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('adm/css/styles.css')}}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
    
	
		
	
	<script src="{{asset('adm/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('adm/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('adm/js/chart.min.js')}}"></script>
	<script src="{{asset('adm/js/chart-data.js')}}"></script>
	<script src="{{asset('adm/js/easypiechart.js')}}"></script>
	<script src="{{asset('adm/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('adm/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('adm/js/custom.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>