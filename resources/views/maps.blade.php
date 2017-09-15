<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 @include('includes.head')
<!--mapcss-->
 <link rel="stylesheet" type="text/css" href="css/examples.css" />
<!--js-->
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<!--map-->
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
<!--market updates updates-->
	<div class="map-main-page">  	
    	<h2>Maps</h2>
    	    <div class="map-grid">
			  <div class="map-system">
		 		<div class="col-md-6 map-1">
			    <div class="span11">
			      <div id="map3"></div>
			    </div>
			
				</div>
				 <script type="text/javascript">
			    var map;
			    $(document).ready(function(){
			      map = new GMaps({
			        el: '#map3',
			        lat: -12.043333,
			        lng: -77.028333,
			        mapTypeControlOptions: {
			          mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
			        }
			      });
			      map.addMapType("osm", {
			        getTileUrl: function(coord, zoom) {
			          return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
			        },
			        tileSize: new google.maps.Size(256, 256),
			        name: "OpenStreetMap",
			        maxZoom: 18
			      });
			      map.addMapType("cloudmade", {
			        getTileUrl: function(coord, zoom) {
			          return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
			        },
			        tileSize: new google.maps.Size(256, 256),
			        name: "CloudMade",
			        maxZoom: 18
			      });
			      map.setMapTypeId("osm");
			    });
			  </script>
			  	<div class="col-md-6 map-2">
					
			     <div class="span11">
			      <div id="map"></div>
			    </div>
				   <script type="text/javascript">
			    var map;
			
			    var getTile = function(coord, zoom, ownerDocument) {
			      var div = ownerDocument.createElement('div');
			      div.innerHTML = coord;
			      div.style.width = this.tileSize.width + 'px';
			      div.style.height = this.tileSize.height + 'px';
			      div.style.background = 'rgba(250, 250, 250, 0.55)';
			      div.style.fontFamily = 'Monaco, Andale Mono, Courier New, monospace';
			      div.style.fontSize = '10';
			      div.style.fontWeight = 'bolder';
			      div.style.border = 'dotted 1px #aaa';
			      div.style.textAlign = 'center';
			      div.style.lineHeight = this.tileSize.height + 'px';
			      return div;
			    };
			
			    $(document).ready(function(){
			      map = new GMaps({
			        el: '#map',
			        lat: -12.043333,
			        lng: -77.028333
			      });
			      map.addOverlayMapType({
			        index: 0,
			        tileSize: new google.maps.Size(256, 256),
			        getTile: getTile
			      });
			    });
			   </script>
					</div>
			 		<div class="clearfix"> </div>
			 		
				</div>
		 <div class="map-system">
	 		<div class="col-md-6 map-1">
	    <div class="span11">
	      <div id="map2"></div>
		</div>
		 <script type="text/javascript">
	    var map;
	    $(document).ready(function(){
	      map = new GMaps({
	        el: '#map2',
	        lat: -12.043333,
	        lng: -77.028333,
	        zoomControl : true,
	        zoomControlOpt: {
	            style : 'SMALL',
	            position: 'TOP_LEFT'
	        },
	        panControl : false,
	        streetViewControl : false,
	        mapTypeControl: false,
	        overviewMapControl: false
	      });
	    });
	  </script>
	 		</div>
	 		<div class="col-md-6 map-2">
			
	      <div class="span11">
	        <div id="map1"></div>
	      
		  </div>
		    <script>
	        $(function () {
	          var map = new GMaps({
	          el: "#map1",
	          lat: 41.895465,
	          lng: 12.482324,
	          zoom: 5, 
	          zoomControl : true,
	          zoomControlOpt: {
	            style : "SMALL",
	            position: "TOP_LEFT"
	          },
	          panControl : true,
	          streetViewControl : false,
	          mapTypeControl: false,
	          overviewMapControl: false
	        });
	        
	        var styles = [
	            {
	              stylers: [
	                { hue: "#00ffe6" },
	                { saturation: -20 }
	              ]
	            }, {
	                featureType: "road",
	                elementType: "geometry",
	                stylers: [
	                    { lightness: 100 },
	                    { visibility: "simplified" }
	              ]
	            }, {
	                featureType: "road",
	                elementType: "labels",
	                stylers: [
	                    { visibility: "off" }
	              ]
	            }
	        ];
	        
	        map.addStyle({
	            styledMapName:"Styled Map",
	            styles: styles,
	            mapTypeId: "map_style"  
	        });
	        
	        map.setStyle("map_style");
	      });
	    </script>
		
			</div>
	 		<div class="clearfix"> </div> 		
		</div>
	</div>
 	<!--//grid-->
       </div>  	

</div>
<!--climate end here-->

<!--inner block end here-->
<!--copy rights start here-->
@include('includes.footer')
<!--
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	-->
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

     
                              