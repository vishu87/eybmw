<?php include('auth.php'); include('header.php'); ?>

<div class="page-banner-div">
	<div class="container">
		<div class="top-head">
			<div class="row">
				<div class="col-md-8">
					<h3>
						Impact Investor Portfolio
					</h3>	
				</div>
				<div class="col-md-4 logo-right">
					<a href="index.php"><img src="assets/img/logo.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-body">
		<div class="portfolio chart">
	  		<div id="chartContainer" style="height: 400px; width: 100%;"></div>
	  		<div class="hide-text" style="height: 15px;"></div>
		</div>

		<div class="portfolio-table">
			<h2>Portfolio Breakdown</h2>
			<table>
				<thead>
					<td></td>
					<td>Expected Return</td>
					<td>Investments</td>
				</thead>
				<tbody>
					<tr>
						<td>Non-Profit Lending</td>
						<td>2-4%</td>
						<td>Boston Community Capital</td>
					</tr>
					<tr>
						<td>Microfinance</td>
						<td>0-1%</td>
						<td>Kiva</td>
					</tr>
					<tr>
						<td>VC Fund</td>
						<td>9+%</td>
						<td>Boston Impact Initiative</td>
					</tr>
					<tr>
						<td>Pay For Success Bonds</td>
						<td>2-6%</td>
						<td>Social Finance</td>
					</tr>
					<tr>
						<td>Green Bonds</td>
						<td>4-8%</td>
						<td>PSM Clean Energy</td>
					</tr>
					<tr>
						<td>Grants</td>
						<td>0%</td>
						<td>Social Innovation Forum</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="next-btn">
			<a href="dashboard.php">Your Dashboard</a>
		</div>
	</div>
</div>

<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	CanvasJS.addColorSet("greenShades",["#4674A3","#A5C0DF","#C5D7EA","#E0E0E0", "#919191","#B5B5B5"]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
        animationEnabled: true,
        colorSet: "greenShades",
		legend: false,
		toolTip:{
		   	contentFormatter: function ( e ) {
		   		return "Custom ToolTip"; 
		   	}  
		},
		data: [
		{        
			type: "pie",
			name: "portfolio",      
			indexLabelFontSize: 18,
			indexLabelFontWeight: "bold",
			indexLabelMaxWidth: 100,
			startAngle: -160,
			toolTipContent:"{label} {y}% <br>(Expected Return {legendText})",
			indexLabelPlacement: "inside",
			indexLabelFontColor: "black",
			dataPoints: [
				{  y: 20, label: "Grants", legendText:'0%', indexLabel:'Grants 20%'},
				{  y: 25, label: "Non-Profit Lending", legendText: '2-4%', indexLabel:'Non-Profit Lending 25%' },
				{  y: 5, label: "Microfinance", legendText: '0-1%', indexLabel:'Microfinance 5%' },
				{  y: 20, label: "VC Fund", legendText: '9+%', indexLabel:'VC Fund 20%'},       
				{  y: 15, label: "Pay For Success Bonds", legendText:'2-6%', indexLabel:'Pay For Success Bonds 15%'},
				{  y: 15, label: "Green Bonds", legendText:'4-8%', indexLabel: 'Green Bonds 15%'},
			]
		}
		]
	});
	chart.render();
}
</script>
<?php include('footer.php'); ?>