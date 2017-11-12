<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Status Awareness System</title>

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
	 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	    <link href="css/site.css" rel="stylesheet" type="text/css" />
		 <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
 	<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
 	<link rel="stylesheet" type="text/css" href="css/customstyle.css">
	
<script type="text/javascript">

$(window).load(function() {
	$(".se-pre-con").fadeOut("slow");
});
$(".demo1").css("height", "240px");

$.ajax({
	
	url:"criticalerror.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	$('#errortopic').html(obj["name"]);	
					$('#errornumber').html(obj["count"]);			
					
					if(obj["color"]=="red"){
						$('#error').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#error').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#error').css("background-color","#EEAE32");
					}else{
						$('#error').css("background-color","#A4A4A4");
					}
			}
	
});
//$('#errornumber').load('criticalerror.php').fadeIn("slow");	
$.ajax({
	
	url:"performancetest.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	$('#performancetesttopic').html(obj["name"]);	
					$('#performancetestnumber').html(obj["count"]);						
					if(obj["color"]=="red"){
						$('#performancetest').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#performancetest').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#performancetest').css("background-color","#EEAE32");
					}else{
						$('#performancetest').css("background-color","#A4A4A4");
					}
			}
	
});
//$('#performancetestnumber').load('performancetest.php').fadeIn("slow");
$.ajax({
	
	url:"regressiontest.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				  	$('#regressiontesttopic').html(obj["name"]);
					$('#regressiontestnumber').html(obj["count"]);						
					if(obj["color"]=="red"){
						$('#regressiontest').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#regressiontest').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#regressiontest').css("background-color","#EEAE32");
					}else{
						$('#regressiontest').css("background-color","#A4A4A4");
					}
			}
	
});
//$('#regressiontestnumber').load('regressiontest.php').fadeIn("slow");
$.ajax({
	
	url:"bugs.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	$('#bugstopic').html(obj["name"]);
					$('#bugsnumber').html(obj["count"]);						
					if(obj["color"]=="red"){
						$('#bugs').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#bugs').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#bugs').css("background-color","#EEAE32");
					}else{
						$('#bugs').css("background-color","#A4A4A4");
					}
			}
	
});
//$('#bugsnumber').load('bugs.php').fadeIn("slow");
$.ajax({
	
	url:"helpticketitem.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	$('#helptickettopic').html(obj["name"]);
					$('#helpticketnumber').html(obj["count"]);						
					if(obj["color"]=="red"){
						$('#helpticketcount').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#helpticketcount').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#helpticketcount').css("background-color","#EEAE32");
					}else{
						$('#helpticketcount').css("background-color","#A4A4A4");
					}
					
			}
	
});

//$('#helpticketnumber').load('helpticketitem.php').fadeIn("slow");
$.ajax({
	
	url:"alive.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	$('#livetopic').html(obj["name"]);
					$('#alivenumber').html(obj["count"]);						
					if(obj["color"]=="red"){
						$('#alivecount').css("background-color","#E72711");
					}else if(obj["color"]=="green"){
						$('#alivecount').css("background-color","#9BBB58");
					}else if(obj["color"]=="yellow"){
						$('#alivecount').css("background-color","#EEAE32");
					}else{
						$('#alivecount').css("background-color","#A4A4A4");
					}
			}
	
});
//$('#alivenumber').load('alive.php').fadeIn("slow");
	//$('#demo1').load('helptickets.php').fadeIn("slow");
	
$.ajax({
	
	url:"helptickets.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				  //$("#myTable tbody tr:not(:first-child)").remove();
				  var count = 1;
				  $(".demo1").empty();
				 $(".demo1").css("height", "315px");
				  
				  $.each(obj, function(key, val) {
						var image = count%7;
						
					  var ul;
						if(val["type"]=="Recent"){
							ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
						ul = ul + "<td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
						ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
						ul = ul + "</tr></table></li>";
						}else if(val["type"]=="Preceding"){
								ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
							ul = ul + "<td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
							ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
							ul = ul + "</tr></table></li>";
							}
							$('.demo1').append(ul);
							count = count+1;
				  });
			}
	
});


$.ajax({
	
	url:"bugsmsg.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	//alert("Success!");
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				  //$("#myTable tbody tr:not(:first-child)").remove();
				  var count = 1;
				  $(".demo2").empty();
				 $(".demo2").css("height", "315px");
				  
				  $.each(obj, function(key, val) {
				http://venturebeat.com/wp-content/uploads/2013/05/scared-bug.jpg
							var ul = "<li class='news-item' id='demo2li"+count+"'><table cellpadding='4'><tr>";
							ul = ul + "<td><img src='http://venturebeat.com/wp-content/uploads/2013/05/scared-bug.jpg' width='70px'></td>";
							ul = ul + "<td><b>" + val["key"] + "</b><br><a href='"+val["link"]+"'>" + val["topic"] + "</a></td>";						
							ul = ul + "</tr></table></li>";
							$('.demo2').append(ul);
							count = count+1;
				  });
			}
	
});

var auto_refresh = setInterval(

function ()
{
	
	$.ajax({
			
			url:"criticalerror.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	$('#errortopic').html(obj["name"]);
						 	
						 	
								$('#errornumber').html(obj["count"]);			
						 	
							
							if(obj["color"]=="red"){
								$('#error').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#error').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#error').css("background-color","#EEAE32");
							}else{
								$('#error').css("background-color","#A4A4A4");
							}
					}
			
        });
	//$('#errornumber').load('criticalerror.php').fadeIn("slow");	
	$.ajax({
			
			url:"performancetest.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	$('#performancetesttopic').html(obj["name"]);	
							$('#performancetestnumber').html(obj["count"]);						
							if(obj["color"]=="red"){
								$('#performancetest').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#performancetest').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#performancetest').css("background-color","#EEAE32");
							}else{
								$('#performancetest').css("background-color","#A4A4A4");
							}
					}
			
        });
	//$('#performancetestnumber').load('performancetest.php').fadeIn("slow");
	$.ajax({
			
			url:"regressiontest.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						  	$('#regressiontesttopic').html(obj["name"]);
							$('#regressiontestnumber').html(obj["count"]);						
							if(obj["color"]=="red"){
								$('#regressiontest').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#regressiontest').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#regressiontest').css("background-color","#EEAE32");
							}else{
								$('#regressiontest').css("background-color","#A4A4A4");
							}
					}
			
        });
	//$('#regressiontestnumber').load('regressiontest.php').fadeIn("slow");
	$.ajax({
			
			url:"bugs.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	$('#bugstopic').html(obj["name"]);
							$('#bugsnumber').html(obj["count"]);						
							if(obj["color"]=="red"){
								$('#bugs').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#bugs').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#bugs').css("background-color","#EEAE32");
							}else{
								$('#bugs').css("background-color","#A4A4A4");
							}
					}
			
        });
	//$('#bugsnumber').load('bugs.php').fadeIn("slow");
	$.ajax({
			
			url:"helpticketitem.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	$('#helptickettopic').html(obj["name"]);
							$('#helpticketnumber').html(obj["count"]);						
							if(obj["color"]=="red"){
								$('#helpticketcount').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#helpticketcount').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#helpticketcount').css("background-color","#EEAE32");
							}else{
								$('#helpticketcount').css("background-color","#A4A4A4");
							}
							
					}
			
        });
		
	//$('#helpticketnumber').load('helpticketitem.php').fadeIn("slow");
		$.ajax({
			
			url:"alive.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			//alert("Success!");
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	$('#livetopic').html(obj["name"]);
							$('#alivenumber').html(obj["count"]);						
							if(obj["color"]=="red"){
								$('#alivecount').css("background-color","#E72711");
							}else if(obj["color"]=="green"){
								$('#alivecount').css("background-color","#9BBB58");
							}else if(obj["color"]=="yellow"){
								$('#alivecount').css("background-color","#EEAE32");
							}else{
								$('#alivecount').css("background-color","#A4A4A4");
							}
					}
			
        });
		//$('#alivenumber').load('alive.php').fadeIn("slow");
			//$('#demo1').load('helptickets.php').fadeIn("slow");
			
  
		
		
		

		
		
	},14000);

var auto_refresh = setInterval(

		function ()
		{
			  $.ajax({
					
					url:"helptickets.php",
					type:"POST",
					data: ''
				})
		        .success(function(result)	{
					//alert("Success!");
					var obj = jQuery.parseJSON(result);
							if(obj != '')
							{
								  //$("#myTable tbody tr:not(:first-child)").remove();
								  var count = 1;
								  $(".demo1").empty();
								 $(".demo1").css("height", "315px");
								  
								  $.each(obj, function(key, val) {
									
									  var image = count%7;
										
									  var ul;
										if(val["type"]=="Recent"){
											ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
										ul = ul + "<td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
										ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
										ul = ul + "</tr></table></li>";
										}else if(val["type"]=="Preceding"){
												ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
											ul = ul + "<td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
											ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
											ul = ul + "</tr></table></li>";
											}
											$('.demo1').append(ul);
											count = count+1;
								  });
							}
					
		        });
		},80000);

var auto_refresh2 = setInterval(
function(){
	$.ajax({
		
		url:"bugsmsg.php",
		type:"POST",
		data: ''
	})
    .success(function(result)	{
		//alert("Success!");
		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					  //$("#myTable tbody tr:not(:first-child)").remove();
					  var count = 1;
					  $(".demo2").empty();
					 $(".demo2").css("height", "315px");
					  
					  $.each(obj, function(key, val) {
					http://venturebeat.com/wp-content/uploads/2013/05/scared-bug.jpg
								var ul = "<li class='news-item' id='demo2li"+count+"'><table cellpadding='4'><tr>";
								ul = ul + "<td><img src='http://venturebeat.com/wp-content/uploads/2013/05/scared-bug.jpg' width='70px'></td>";
								ul = ul + "<td><b>" + val["key"] + "</b><br><a href='"+val["link"]+"'>" + val["topic"] + "</a></td>";						
								ul = ul + "</tr></table></li>";
								$('.demo2').append(ul);
								count = count+1;
					  });
				}
		
    });
	
},50000);


function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];

        if (typeof x == "string")
        {
            x = x.toLowerCase(); 
        }
        if (typeof y == "string")
        {
            y = y.toLowerCase();
        }

        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}

window.onload = function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		var dataPoints3 = [];

		var totalPageSpeed = 0;
		var totalRestSpeed = 0;
		var totalRef = 0;
		
		var averagePageSpeed = 0;
		var averageRestSpeed = 0;
		var averageRef = 0;
		
		var chart = new CanvasJS.Chart("chartContainer",{
			zoomEnabled: true,
			animationEnabled: true,
		
			title: {
				text: "",
					fontSize: 30
			},
		
			toolTip: {
				shared: true
			},
			theme: "theme2",
			legend: {
				fontFamily: "Open Sans",		
				verticalAlign: "top",
				horizontalAlign: "center",
                                fontSize: 14,
				fontWeight: "bold",
				
				fontColor: "dimGrey"
			},
			axisX: {
				
				gridColor: "Silver",
				
				tickColor: "silver"
				
			
			},
			axisY:{
				prefix: '',
				includeZero: false,
				lineThickness: 2,
				   
				gridThickness: 0
			}, 
			data: [{ 
				// dataSeries1
				type: "line",
			
				showInLegend: true,
				lineThickness: 4,
				markerType: "square",
				  markerSize: 12, 
				    markerColor: "#F5D79D",
				  markerBorderColor: "#EEAE32",
				  markerBorderThickness: 2,
				color: "#EEAE32",
				//color: "#47bbb3",
				name: "PAGE SPEED",
				dataPoints: dataPoints1
			},
			{				
				// dataSeries2
				type: "line",
		
				showInLegend: true,
				lineThickness: 4,
				markerType: "circle",
				  markerSize: 12, 
				  markerColor: "#E9887D",
				  markerBorderColor: "#e72711",
				  markerBorderThickness: 2,
				color: "#e72711",
				name: "REST SPEED" ,
				dataPoints: dataPoints2
			},
			{				
				// dataSeries3
				type: "line",
		
				showInLegend: true,
				lineThickness: 4,
				markerType: "no marker",
				color: "#2d2d2d",
				name: "REF" ,
				dataPoints: dataPoints3
			}],
          legend:{
            cursor:"pointer",
			fontFamily: "Open Sans",
			fontSize: 18,
			fontWeight: "bold",
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
		  });
		   $.ajax({
				url:"graph.php",
				type:"POST",
				data: ''
			})
			.success(function(result)	{
				dataPoints1 = [];
				dataPoints2 = [];
				dataPoints3 = [];
				
			var obj = jQuery.parseJSON(result);
			//var sortobj = sortByKey(obj, "time");
			var pCount = 0;
			var rstCount = 0;
			var refCount = 0;

		
				if(obj != '')
				{					  
				  $.each(obj, function(key, val) {
					  pCount = pCount+1;
					  rstCount = rstCount+1;
					  refCount = refCount+1;
					  
						dataPoints1.push({ label: val.time, y: val.pagespeed });							
						dataPoints2.push({ label: val.time, y: val.restspeed });		
						dataPoints3.push({ label: val.time, y: val.reference });

							totalPageSpeed = totalPageSpeed+val.pagespeed;
							totalRestSpeed = totalRestSpeed+val.restspeed;
							totalRef = totalRef+val.reference;
										
					});
				  averagePageSpeed = totalPageSpeed/pCount;
				  averageRestSpeed = totalRestSpeed/rstCount;
				  averageRef = totalRef/refCount;		 						
				}
				
				
					
					chart.options.data[0].dataPoints = dataPoints1;
					chart.options.data[1].dataPoints = dataPoints2;
					chart.options.data[2].dataPoints = dataPoints3;
		
					chart.options.data[0].legendText = "Page Speed: "+averagePageSpeed;
					chart.options.data[1].legendText = "Rest Speed: "+averageRestSpeed;
					chart.options.data[2].legendText = "Reference: "+averageRef;

					
	chart.render();
			});
		var updateGraph = function(){
		   $.ajax({
						url:"graph.php",
						type:"POST",
						data: ''
					})
					.success(function(result)	{
						dataPoints1 = [];
						dataPoints2 = [];
						dataPoints3 = [];
					var obj = jQuery.parseJSON(result);
					//var sortobj = sortByKey(obj, "time");

					var totalPageSpeed2 = 0;
					var totalRestSpeed2 = 0;
					var totalRef2 = 0;
					
					var averagePageSpeed2 = 0;
					var averageRestSpeed2 = 0;
					var averageRef2 = 0;

					var pCount2 = 0;
					var rstCount2 = 0;
					var refCount2 = 0;
					
						if(obj != '')
						{					  
						  $.each(obj, function(key, val) {

							  pCount2 = pCount2+1;
							  rstCount2 = rstCount2+1;
							  refCount2 = refCount2+1;
							  	
								dataPoints1.push({ label: val.time, y: val.pagespeed });							
								dataPoints2.push({ label: val.time, y: val.restspeed });		
								dataPoints3.push({ label: val.time, y: val.reference });

								totalPageSpeed2 = totalPageSpeed2+val.pagespeed;
								totalRestSpeed2 = totalRestSpeed2+val.restspeed;
								totalRef2 = totalRef2+val.reference;
											
						});
					  averagePageSpeed2 = totalPageSpeed2/pCount2;
					  averageRestSpeed2 = totalRestSpeed2/rstCount2;
					  averageRef2 = totalRef2/refCount2;	
																					
						}
						
						
							
							chart.options.data[0].dataPoints = dataPoints1;
							chart.options.data[1].dataPoints = dataPoints2;
							chart.options.data[2].dataPoints = dataPoints3;
				
							chart.options.data[0].legendText = "Page Speed: "+averagePageSpeed2;
							chart.options.data[1].legendText = "Rest Speed: "+averageRestSpeed2;
							chart.options.data[2].legendText = "Reference: "+averageRef2;

							
			chart.render();
					});
					
		};
		setInterval(function(){updateGraph()},5000);
}



</script>
	<script type="text/javascript" src="scripts/canvasjs.min.js"></script>
</head>
<body>
<div class="se-pre-con"></div> 

<?php 

/*
$url1 = "http://vmdevtest01:8080/DashboardServices/rest/StatusAwareCrm/CriticalError";
$url2 = "http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/PerformanceTest";
$url3 = "http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/HelpTicket";
$url4 = "http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/Alive";
$url5 = "http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/RegressionTest";
$url6 = "http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/Bugs";

$url7 = 'http://vmdevtest01:8080/GraylogServices/rest/StatusAwareCrm/HelpTickets';
$json7 = file_get_contents($url7);
$data = json_decode($json7,true);
*/
/*

$json = '{"count" : 15}';
$json_data = json_decode($json,true);
foreach($json_data as $k => $v){
	echo $k;
}
*/
	
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6" id="error">
						<br><p id="errortopic"></p>
						<br><p id="errornumber"></p>
					</div>
					<div class="col-md-6" id="performancetest">
						<br><p id="performancetesttopic"></p>
						<br><p id="performancetestnumber"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" id="regressiontest">
						<br><p id="regressiontesttopic"></p>
						<br><p id="regressiontestnumber"></p>
					</div>
					<div class="col-md-6" id="bugs">
						<br><p id="bugstopic"></p>
						<br><p id="bugsnumber"></p>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-6" id="helpticketcount">
						<br><p id="helptickettopic"></p>
						<br><p id="helpticketnumber"></p>
					</div>
					<div class="col-md-6" id="alivecount">
						<br><p id="livetopic"></p>
						<br><p id="alivenumber"></p>
					</div>
				</div>
				
				
			</div>
		
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6" id="helpticket">
			
						
						<div id="highlight"><br><p id="topic2">CRM/HRM Help Ticket</p></div>
				
					<!--	<a href="#"><p id="helpitem">1. HELP-23423</p></a>
						<a href="#"><p id="helpitem">2. HELP-23417</p></a>
						<a href="#"><p id="helpitem">3. HELP-23381</p></a>
						<a href="#"><p id="helpitem">4. HELP-23370</p></a> -->
						
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12" style="margin-top:30px;">
								<ul class="demo1" style="height:240px;">	
									<li class="news-item"><table cellpadding="4"><tr></tr></table></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer" style="display:none;">

					</div>
				</div>
					
					
					</div>
					<div class="col-md-6" id="alive">
						<div id="highlight3"><br><p id="topic2">CRM/HRM BUGs</p></div>
						
						<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12" style="margin-top:30px;">
								<ul class="demo2">
								
								<?php ?>
									<li class="news-item">
										<table cellpadding="4">
										<!--
											<tr>
												<td><img src="http://icons.iconarchive.com/icons/icons8/windows-8/128/Programming-Bug-icon.png" width="60" class="img-circle" /></td>
												<td>Help-22334...... <a href="#">Read more...</a></td> 
												
											</tr>-->
										</table>
									</li>
									<?php ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-footer" style="display:none;">>

					</div>
				</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="message"><br><div id="chartContainer" style="border-top-right-radias: 15px; margin-top: 0px; margin-left: 0px; height: 390px; width: 100%;">
	</div></div>
				</div>
				
				
			</div>
		</div>
	</div>

	<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 2000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		  $(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 2000,
            onToDo: function () {
                //console.log(this);
            }
        });

		  $("#helpticketcount").click(function(){
			  window.open('main_helpticket.php', 'window name', '_blank');
			  return false;
		  });

		  $("#bugs").click(function(){
			  window.open('main_bugmessage.php', 'window name', '_blank');
			  return false;
		  });
		  $("#bugs").hover(function(){
			  $( this ).addClass( "hover" );
		  },function(){
			  $( this ).removeClass( "hover" );
			  });
		 
       
    });
    
</script>
</body>
</html>