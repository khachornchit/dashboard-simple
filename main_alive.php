<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Status Awareness System</title>

<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
	rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet"
	type="text/css" />
<link href="css/site.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.10.2.min.js"
	type="text/javascript"></script>
<script src="scripts/jquery.bootstrap.newsbox.min.js"
	type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/customstyle4.css">
<style>
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: 12px;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
    border-color: #000;
}
@-webkit- blink {
	from { color: #c00000; }
	to { color: #fff; }
}
</style>
<script type="text/javascript">

$(window).load(function() {
	$(".se-pre-con").fadeOut("slow");
	
});

$(".demo1").css("height", "820px");

$.ajax({
	
	url:"alive.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				$('#slownumber').html(obj["dead"]);			
				
				
				$('#slowcount').css("background-color","#c00000");			
			}
});



$.ajax({
	
	url:"alive.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	
					$('#fastnumber').html(obj["alive"]);						
					
						$('#fastcount').css("background-color","#00b050");
					
					
			}
	
});

$.ajax({
	
	url:"alive.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	
				$('#totalnumber').html(obj["total"]);						
				
				$('#totalcount').css("background-color","#262626");
				
					
			}
	
});



$.ajax({
	
	url:"alive.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				var i = 1;
				 $.each(obj["aliveurls"], function(key, val) {
			//	alert(val["total"]);
						$('#no'+i).html(i);	
						$('#no'+i).css("color","#000");
						$('#no'+i).css("font-size","16pt");
						$('#no'+i).css("font-weight","700");
						$('#url'+i).html(val["url"]);	
						$('#url'+i).css("color","#000");
						$('#url'+i).css("font-size","16pt");
						$('#status'+i).html(val["status"]);	
						$('#status'+i).css("color","#fff");
						$('#status'+i).css("font-size","18pt");
						if(val["status"]=="Dead"){
								$('#statusbg'+i).css("background-color","#c00000");
								//$('#statusbg'+i).css("animation","blink 1s steps(2, start) infinite");
								$('#status'+i).css("animation","blink 1s steps(1, start) infinite");
							//	setInterval(blinker(i), 1000);
							}else{
								$('#statusbg'+i).css("background-color","#00b050");
								}
										
				i = i+1;
				//$('#totalcount').css("background-color","#262626");
				
				 });
			}
	});


// เริ่มจับเวลา

var auto_refresh = setInterval(

function ()
{
	
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
						
						 $.each(obj, function(key, val) {
								
							 	//$('#errortopic').html(val["name"]);	
								$('#slownumber').html(obj["dead"]);			
								
							
									$('#slowcount').css("background-color","#c00000");
							
							 });
					}
			
        });



	$.ajax({
			
			url:"alive.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	
						$('#fastnumber').html(obj["alive"]);						
						
						$('#fastcount').css("background-color","#00b050");
						
							
					}
			
        });

	$.ajax({
		
		url:"alive.php",
		type:"POST",
		data: ''
	})
    .success(function(result)	{
		
		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					 	
					$('#totalnumber').html(obj["total"]);						
					
					$('#totalcount').css("background-color","#262626");
					
						
				}
		
    });

	},36000);





</script>
<script type="text/javascript" src="scripts/canvasjs.min.js"></script>
</head>
<body>
	<div class="se-pre-con"></div> 

<?php
?>
	<div class="container-fluid" style="height:100%;">
		<div class="row" style="height:100%;">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12" id="slowcount">
						<br>
						<p id="slowtopic">DEAD</p>
						<br>
						<p id="slownumber"></p>
					</div>

				</div>

				
				<div class="row">

					<div class="col-md-12" id="fastcount">
						<br>
						<p id="fasttopic">ALIVE</p>
						<br>
						<p id="fastnumber"></p>
					</div>

				</div>
				<div class="row">

					<div class="col-md-12" id="totalcount">
						<br>
						<p id="totaltopic">TOTAL</p>
						<br>
						<p id="totalnumber"></p>
					</div>

				</div>

			</div>

			<div class="col-md-8" style="height:100%;">
				<div class="row" style="height:100%;">
					<div class="col-md-12" id="helpticket">


						<div id="highlight">
							<br>
							<p id="topic2">Alive Urls Crm/Hrm</p>
						</div>



						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<br>
									<div id="chartContainer" style="border-top-right-radias: 15px; margin-top: 0px; margin-left: 0px; height: 180px; width: 100%;">
									<!--   <div class="col-md-12" id="pstopic">
									<p id="pagespeedtopic" style="font-family:font-family: Open Sans; font-weight: 600; font-size: 16pt;">&emsp;Sugar Crm Page Speed</p>
									</div> -->
									<div class="col-md-12" id="info1" style="padding-bottom:20px;">
										<table class="table" style="width:80%; margin-left:20px;">
										<thead>
										<tr style="padding:10px 10px 5px 10px; font-size:18pt; font-weight:700; background-color:#f2f2f2;"><th>No.</th><th style="text-align: center;">Url</th><th style="text-align: center;">Status</th></tr>
										
										</thead>
										
										<tbody>
										<tr style="padding:10px 10px 5px 10px"><td><p id="no1"></p></td><td style="text-align: left;"><p id="url1"></p></td><td style="text-align: center;" id="statusbg1"><p id="status1"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="no2"></p></td><td style="text-align: left;"><p id="url2"></p></td><td style="text-align: center;" id="statusbg2"><p id="status2"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="no3"></p></td><td style="text-align: left;"><p id="url3"></p></td><td style="text-align: center;" id="statusbg3"><p id="status3"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="no4"></p></td><td style="text-align: left;"><p id="url4"></p></td><td style="text-align: center;" id="statusbg4"><p id="status4"></p></td></tr>
										</tbody>
										</table>
									</div>
								<!-- 	<div class="col-md-6" id="info2">
										<table style="width:80%; margin-left:80px; padding-bottom:20px;">
										<tr style="padding:15px 20px 15px 15px"><td>Measured on date</td><td style="text-align: right;"><p id="measureddatepagespeed"></p></td></tr>
										<tr style="padding:15px 20px 15px 15px"><td>Measured time</td><td style="text-align: right;"><p id="measuredtimepagespeed"></p></td></tr>
										<tr style="padding:15px 20px 15px 15px; font-weight:600;"><td>Average Page Speed (ms)</td><td style="text-align: right;"><p id="averagepagespeed"></p></td></tr>
										</table>
									</div> 
									<br>
									<br>
									<div class="col-md-12" id="chart1" style="border-top-right-radias: 15px; margin-left: 5px; height: 420px; width: 98%;">
									</div>
							
									<div class="col-md-12" id="rstopic" style="margin-top: 20px;">
									<p id="restspeedtopic" style="font-family:font-family: Open Sans; font-weight: 600; font-size: 16pt;">&emsp;Sugar Crm Rest Speed</p><hr>
									</div>
									<div class="col-md-6" id="info3" style="padding-bottom:20px;">
										<table style="width:80%; margin-left:20px;">
										<tr style="padding:15px 20px 15px 15px"><td>Total</td><td style="text-align: right;"><p id="totalrestspeed"></p></td><td style="text-align: right;">Pages</td></tr>
										<tr style="padding:15px 20px 15px 15px"><td>Slow</td><td style="text-align: right;"><p id="slowrestspeed"></p></td><td style="text-align: right;">Pages</td></tr>
										<tr style="padding:15px 20px 15px 15px"><td>Medium</td><td style="text-align: right;"><p id="mediumrestspeed"></p></td><td style="text-align: right;">Pages</td></tr>
										<tr style="padding:15px 20px 15px 15px"><td>Fast</td><td style="text-align: right;"><p id="fastrestspeed"></p></td><td style="text-align: right;">Pages</td></tr>
										</table>
									</div>
									<div class="col-md-6" id="info4">
										<table style="width:80%; margin-left:80px; padding-bottom:20px;">
										<tr style="padding:15px 20px 15px 15px"><td>Measured on date</td><td style="text-align: right;"><p id="measureddaterestspeed"></p></td></tr>
										<tr style="padding:15px 20px 15px 15px"><td>Measured time</td><td style="text-align: right;"><p id="measuredtimerestspeed"></td></tr>
										<tr style="padding:15px 20px 15px 15px; font-weight:600;"><td>Average Rest Speed (ms)</td><td style="text-align: right;"><p id="averagerestspeed"></p></td></tr>
										</table>
									</div>
									<br>
									<br>
									
									<div class="col-md-12" id="chart2" style="border-top-right-radias: 15px; margin-left: 5px; height: 420px; width: 98%;">
									</div>
									 -->
								</div>
								</div>
								</div>
							</div>
							<div class="panel-footer" style="display: none;"></div>
						</div>


					</div>

				</div>
			</div>
		</div>
	

	<script type="text/javascript">

	//var countunsolved;
	//var countclosed;
	//var count;

	
	
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 10,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 3000,
            onToDo: function () {
              
            }
        });
		
		  $(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 3000,
            onToDo: function () {
           
            }
        });

	    
		 

		 
		  
		  var color1;
		  $("#slowcount").hover(function(){
			  color1 = $( this ).css( "background-color" );

			  if(color1=="rgb(192, 0, 0)"){
					$('#slowcount').css("background-color","#990000");
				}else if(color1=="rgb(0, 176, 80)"){
					$('#slowcount').css("background-color","#008039");
				}else if(color1=="rgb(255, 192, 0)"){
					$('#slowcount').css("background-color","#e6ac00");
				}else{
					$('#slowcount').css("background-color","#000");
				}
			  
			
		
		  },function(){
		
			
			  $("#slowcount").css( "background-color", color1);
			  });
		  
		  
		  
		  var color3;
		  $("#mediumcount").hover(function(){
			  color3 = $( this ).css( "background-color" );

			  if(color3=="rgb(192, 0, 0)"){
					$('#mediumcount').css("background-color","#990000");
				}else if(color3=="rgb(0, 176, 80)"){
					$('#mediumcount').css("background-color","#008039");
				}else if(color3=="rgb(255, 192, 0)"){
					$('#mediumcount').css("background-color","#e6ac00");
				}else{
					$('#mediumcount').css("background-color","#000");
				}
			  
	
		
		  },function(){
			
			
			  $("#mediumcount").css( "background-color", color3);
			  });
		  
		 

		  var color5;
		  $("#fastcount").hover(function(){
			  color5 = $( this ).css( "background-color" );

			  if(color5=="rgb(192, 0, 0)"){
					$('#fastcount').css("background-color","#990000");
				}else if(color5=="rgb(0, 176, 80)"){
					$('#fastcount').css("background-color","#008039");
				}else if(color5=="rgb(255, 192, 0)"){
					$('#fastcount').css("background-color","#e6ac00");
				}else{
					$('#fastcount').css("background-color","#000");
				}
			  
		
		
		  },function(){
		
			
			  $("#fastcount").css( "background-color", color5);
			  });


		  var color6;
		  $("#totalcount").hover(function(){
			  color6 = $( this ).css( "background-color" );

			  if(color5=="rgb(192, 0, 0)"){
					$('#totalcount').css("background-color","#990000");
				}else if(color6=="rgb(0, 176, 80)"){
					$('#totalcount').css("background-color","#008039");
				}else if(color6=="rgb(255, 192, 0)"){
					$('#totalcount').css("background-color","#e6ac00");
				}else{
					$('#totalcount').css("background-color","#000");
				}
			  
		
		
		  },function(){
		
			
			  $("#totalcount").css( "background-color", color6);
			  });
	       
    });
    
</script>
</body>
</html>