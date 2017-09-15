
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 @include('includes.head')
<!--//charts-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
            	@include('includes.header')
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="chart-main-block">
       <div class="chart-first-line">
    	<div class="col-md-6 chart-blo-1">
    	   <div class="dygno">
    		     <h2>Doughnut</h2>
				
				    <canvas id="doughnut" height="300" width="470" style="width: 470px; height: 300px;"></canvas>
								<script>
									var doughnutData = [
									{
										value: 30,
										color:"#337AB7"
									},
									{
										value : 50,
										color : "#929292"
									},
									{
										value : 100,
										color : "#FC8213"
									},
									{
										value : 40,
										color : "#68AE00"
									},
									];
									new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
								</script>
			</div>	
    	 </div>
    	<div class="col-md-6 chart-blo-1">
    	    <div class="line-chart">
    		<h3>Line Chart</h3>
    		 <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"> </canvas>
                    <script>
                        var lineChartData = {
						labels : ["","","","","","",""],
						datasets : [
							{
								fillColor : "rgba(252, 130, 19, 0.74)",
								strokeColor : "#FC8213",
								pointColor : "#FC8213",
								pointStrokeColor : "#fff",
								data : [65,59,90,81,56,55,40]
							},
							{
								fillColor : "rgba(51, 122, 183, 0.71)",
								strokeColor : "#337AB7",
								pointColor : "#337AB7",
								pointStrokeColor : "#fff",
								data : [28,48,40,19,96,27,100]
							}
						]
						
					};
                       new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);

                    </script>
    	    </div>
    	  </div>
    	  <div class="clearfix"> </div>
    	</div>
    	<div class="chart-second-line">
    	<div class="col-md-6 chart-blo-1">
    	    <div class="polararea">
    		<h3>Polar Chart</h3>
    		<canvas id="polarArea" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
				<script>
					var chartData = [
						{
							value : Math.random(),
							color: "#FC8213"
						},
						{
							value : Math.random(),
							color: "#68AE00"
						},
						{
							value : Math.random(),
							color: "#337AB7"
						},
						{
							value : Math.random(),
							color: "#FC8213"
						},
						{
							value : Math.random(),
							color: "#68AE00"
						},
						{
							value : Math.random(),
							color: "#337AB7"
						}
					];
					new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
				</script>   
			</div> 		
    	  </div>   	
    	<div class="col-md-6 chart-blo-1">
    		<div class="chart-other">
	    		<h3>Pie</h3> 		
				<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
								<script>
									var pieData = [
										{
											value: 30,
											color:"#337AB7"
										},
										{
											value : 50,
											color : "#FC8213"
										},
										{
											value : 100,
											color : "#8BC34A"
										}
									
									];
									new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
								</script>
            </div>
    	</div>
    	<div class="clearfix"> </div>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
@include('includes.footer')
<!--
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
-->	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
	@include('includes.sidebar')
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>					
