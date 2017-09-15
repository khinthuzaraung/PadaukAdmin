<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 @include('includes.head')
<!--//skycons-icons-->
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
    <div class="cols-grids panel-widget">
    	<h2>Grids</h2>
		<div class="chute chute-center text-center">
				<div class="row mb40">
					<div class="col-md-12">
						<div class="demo-grid">
							<code>.col-md-12</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-6">
						<div class="demo-grid">
							<code>.col-md-6</code>
						</div>
					</div>
					<div class="col-md-6">
						<div class="demo-grid">
							<code>.col-md-6</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-4">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
					<div class="col-md-4">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
					<div class="col-md-4">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
				</div>

				<div class="row mb40">
					<div class="col-md-8 mb5">
						<div class="demo-grid">
							<code>.col-md-8</code>
						</div>
					</div>
					<div class="col-md-4 mb5">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
					<div class="col-md-3 mb5">
						<div class="demo-grid">
							<code>.col-md-3</code>
						</div>
					</div>
					<div class="col-md-6 mb5">
						<div class="demo-grid">
							<code>.col-md-6</code>
						</div>
					</div>
				</div>
				<div class="row mb40">
					<div class="col-md-8 mb5">
						<div class="demo-grid">
							<code>.col-md-8</code>
						</div>
					</div>
					<div class="col-md-4 mb5">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>

				</div>
				<div class="row mb40">
					<div class="col-md-4">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-2">
						<div class="demo-grid">
							<code>.col-md-2</code>
						</div>
					</div>
					<div class="col-md-4">
						<div class="demo-grid">
							<code>.col-md-4</code>
						</div>
					</div>
				</div>
		  </div>
	 </div>	
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
@include('includes.footer')
<!--<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
-->
<!--COPY rights end here-->
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

              
