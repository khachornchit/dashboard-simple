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
<link rel="stylesheet" type="text/css" href="css/customstyle5.css">
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
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 3px;
    line-height: 1.428571429;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
	
	url:"regressiontestdetail.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				$('#slownumber').html(obj["fail"]);			
				
				
				$('#slowcount').css("background-color","#c00000");			
			}
});



$.ajax({
	
	url:"regressiontestdetail.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	
					$('#fastnumber').html(obj["pass"]);						
					
						$('#fastcount').css("background-color","#00b050");
					
					
			}
	
});

$.ajax({
	
	url:"regressiontestdetail.php",
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
	
	url:"regressiontestdetail.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				var i = 1;
				 $.each(obj["regressiontestfailitems"], function(key, val) {
			//	alert(val["total"]);
						$('#fno'+i).html(val["no"]);	
						$('#fno'+i).css("color","#000");
						$('#fno'+i).css("font-size","16pt");
						$('#fno'+i).css("font-weight","700");
						$('#fitem'+i).html(val["item"]);	
						//$('#fitem'+i).css("color","#000");
						$('#fitem'+i).css("font-size","16pt");
						$('#ftestdatetime'+i).html(val["testdatetime"]);	
						$('#ftestdatetime'+i).css("color","#000");
						$('#ftestdatetime'+i).css("font-size","16pt");
						$('#ftestindex'+i).html(val["testindextime"]);	
						$('#ftestindex'+i).css("color","#000");
						$('#ftestindex'+i).css("font-size","16pt");
						$('#fresult'+i).html(val["testresult"]);	
						$('#fresult'+i).css("color","#fff");
						$('#fresult'+i).css("font-size","16pt");
						//if(val["result"]=="Dead"){
								$('#fresultbg'+i).css("background-color","#c00000");
								//$('#statusbg'+i).css("animation","blink 1s steps(2, start) infinite");
							//	$('#fresult'+i).css("animation","blink 1s steps(1, start) infinite");
							//	setInterval(blinker(i), 1000);
							//}else{
							//	$('#resultbg'+i).css("background-color","#00b050");
							//	}
										
				i = i+1;
				//$('#totalcount').css("background-color","#262626");
				
				 });
			}
	});


$.ajax({
	
	url:"regressiontestdetail.php",
	type:"POST",
	data: ''
})
.success(function(result)	{
	
	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				var i = 1;
				 $.each(obj["regressiontestpassitems"], function(key, val) {
			//	alert(val["total"]);
						$('#pno'+i).html(val["no"]);	
						$('#pno'+i).css("color","#000");
						$('#pno'+i).css("font-size","16pt");
						$('#pno'+i).css("font-weight","700");
						$('#pitem'+i).html(val["item"]);	
						//$('#fitem'+i).css("color","#000");
						$('#pitem'+i).css("font-size","16pt");
						$('#ptestdatetime'+i).html(val["testdatetime"]);	
						$('#ptestdatetime'+i).css("color","#000");
						$('#ptestdatetime'+i).css("font-size","16pt");
						$('#ptestindex'+i).html(val["testindextime"]);	
						$('#ptestindex'+i).css("color","#000");
						$('#ptestindex'+i).css("font-size","16pt");
						$('#presult'+i).html(val["testresult"]);	
						$('#presult'+i).css("color","#fff");
						$('#presult'+i).css("font-size","16pt");
						//if(val["result"]=="Dead"){
								$('#presultbg'+i).css("background-color","#00b050");
								//$('#statusbg'+i).css("animation","blink 1s steps(2, start) infinite");
							//	$('#fresult'+i).css("animation","blink 1s steps(1, start) infinite");
							//	setInterval(blinker(i), 1000);
							//}else{
							//	$('#resultbg'+i).css("background-color","#00b050");
							//	}
										
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
		
		url:"regressiontestdetail.php",
		type:"POST",
		data: ''
	})
	.success(function(result)	{

		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					$('#slownumber').html(obj["fail"]);			
					
					
					$('#slowcount').css("background-color","#c00000");			
				}
	});



	$.ajax({
		
		url:"regressiontestdetail.php",
		type:"POST",
		data: ''
	})
	.success(function(result)	{

		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					 	
						$('#fastnumber').html(obj["pass"]);						
						
							$('#fastcount').css("background-color","#00b050");
						
						
				}
		
	});

	$.ajax({
		
		url:"regressiontestdetail.php",
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
		
		url:"regressiontestdetail.php",
		type:"POST",
		data: ''
	})
	.success(function(result)	{
		
		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					var i = 1;
					 $.each(obj["regressiontestfailitems"], function(key, val) {
				//	alert(val["total"]);
							$('#fno'+i).html(val["no"]);	
							$('#fno'+i).css("color","#000");
							$('#fno'+i).css("font-size","16pt");
							$('#fno'+i).css("font-weight","700");
							$('#fitem'+i).html(val["item"]);	
							//$('#fitem'+i).css("color","#000");
							$('#fitem'+i).css("font-size","16pt");
							$('#ftestdatetime'+i).html(val["testdatetime"]);	
							$('#ftestdatetime'+i).css("color","#000");
							$('#ftestdatetime'+i).css("font-size","16pt");
							$('#ftestindex'+i).html(val["testindextime"]);	
							$('#ftestindex'+i).css("color","#000");
							$('#ftestindex'+i).css("font-size","16pt");
							$('#fresult'+i).html(val["testresult"]);	
							$('#fresult'+i).css("color","#fff");
							$('#fresult'+i).css("font-size","16pt");
							//if(val["result"]=="Dead"){
									$('#fresultbg'+i).css("background-color","#c00000");
									//$('#statusbg'+i).css("animation","blink 1s steps(2, start) infinite");
								//	$('#fresult'+i).css("animation","blink 1s steps(1, start) infinite");
								//	setInterval(blinker(i), 1000);
								//}else{
								//	$('#resultbg'+i).css("background-color","#00b050");
								//	}
											
					i = i+1;
					//$('#totalcount').css("background-color","#262626");
					
					 });
				}
		});
	$.ajax({
		
		url:"regressiontestdetail.php",
		type:"POST",
		data: ''
	})
	.success(function(result)	{
		
		var obj = jQuery.parseJSON(result);
				if(obj != '')
				{
					var i = 1;
					 $.each(obj["regressiontestpassitems"], function(key, val) {
				//	alert(val["total"]);
							$('#pno'+i).html(val["no"]);	
							$('#pno'+i).css("color","#000");
							$('#pno'+i).css("font-size","16pt");
							$('#pno'+i).css("font-weight","700");
							$('#pitem'+i).html(val["item"]);	
							//$('#fitem'+i).css("color","#000");
							$('#pitem'+i).css("font-size","16pt");
							$('#ptestdatetime'+i).html(val["testdatetime"]);	
							$('#ptestdatetime'+i).css("color","#000");
							$('#ptestdatetime'+i).css("font-size","16pt");
							$('#ptestindex'+i).html(val["testindextime"]);	
							$('#ptestindex'+i).css("color","#000");
							$('#ptestindex'+i).css("font-size","16pt");
							$('#presult'+i).html(val["testresult"]);	
							$('#presult'+i).css("color","#fff");
							$('#presult'+i).css("font-size","16pt");
							//if(val["result"]=="Dead"){
									$('#presultbg'+i).css("background-color","#00b050");
									//$('#statusbg'+i).css("animation","blink 1s steps(2, start) infinite");
								//	$('#fresult'+i).css("animation","blink 1s steps(1, start) infinite");
								//	setInterval(blinker(i), 1000);
								//}else{
								//	$('#resultbg'+i).css("background-color","#00b050");
								//	}
											
					i = i+1;
					//$('#totalcount').css("background-color","#262626");
					
					 });
				}
		});
	},3000);





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
						<p id="slowtopic">FAILED</p>
						<br>
						<p id="slownumber"></p>
					</div>

				</div>

				
				<div class="row">

					<div class="col-md-12" id="fastcount">
						<br>
						<p id="fasttopic">PASSED</p>
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
							<p id="topic2">Regression Test Results Crm/Hrm</p>
						</div>



						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<br>
									<div id="chartContainer" style="border-top-right-radias: 15px; margin-top: 0px; margin-left: 0px; height: 840px; width: 100%;">
									<!--   <div class="col-md-12" id="pstopic">
									<p id="pagespeedtopic" style="font-family:font-family: Open Sans; font-weight: 600; font-size: 16pt;">&emsp;Sugar Crm Page Speed</p>
									</div> -->
									<div class="col-md-12" id="info1" style="padding-bottom:10px;">
										<table class="table" style="width:100%; margin-left:20px;">
										<thead>
										<tr style="padding:10px 10px 5px 10px; font-size:14pt; font-weight:700; color:#fff;background-color:#c00000;"><th>No.</th><th style="text-align: left;">Sugar Live Test Cases Failed</th><th style="text-align: left;">Tested Date Time</th><th style="text-align: right;">Test Index(ms)</th><th style="text-align: center;">Result</th></tr>
										
										</thead>
										
										<tbody>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno1"></p></td><td style="text-align: left;"><a href="#" id="fitem1"></a></td><td><p id="ftestdatetime1"></p></td><td style="text-align: right;"><p id="ftestindex1"></p></td><td style="text-align: center;" id="fresultbg1"><p id="fresult1"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno2"></p></td><td style="text-align: left;"><a href="#" id="fitem2"></a></td><td><p id="ftestdatetime2"></p></td><td style="text-align: right;"><p id="ftestindex2"></p></td><td style="text-align: center;" id="fresultbg2"><p id="fresult2"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno3"></p></td><td style="text-align: left;"><a href="#" id="fitem3"></a></td><td><p id="ftestdatetime3"></p></td><td style="text-align: right;"><p id="ftestindex3"></p></td><td style="text-align: center;" id="fresultbg3"><p id="fresult3"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno4"></p></td><td style="text-align: left;"><a href="#" id="fitem4"></a></td><td><p id="ftestdatetime4"></p></td><td style="text-align: right;"><p id="ftestindex4"></p></td><td style="text-align: center;" id="fresultbg4"><p id="fresult4"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno5"></p></td><td style="text-align: left;"><a href="#" id="fitem5"></a></td><td><p id="ftestdatetime5"></p></td><td style="text-align: right;"><p id="ftestindex5"></p></td><td style="text-align: center;" id="fresultbg5"><p id="fresult5"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno6"></p></td><td style="text-align: left;"><a href="#" id="fitem6"></a></td><td><p id="ftestdatetime6"></p></td><td style="text-align: right;"><p id="ftestindex6"></p></td><td style="text-align: center;" id="fresultbg6"><p id="fresult6"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno7"></p></td><td style="text-align: left;"><a href="#" id="fitem7"></a></td><td><p id="ftestdatetime7"></p></td><td style="text-align: right;"><p id="ftestindex7"></p></td><td style="text-align: center;" id="fresultbg7"><p id="fresult7"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="fno8"></p></td><td style="text-align: left;"><a href="#" id="fitem8"></a></td><td><p id="ftestdatetime8"></p></td><td style="text-align: right;"><p id="ftestindex8"></p></td><td style="text-align: center;" id="fresultbg8"><p id="fresult8"></p></td></tr>
										</tbody>
										</table>
									</div>
									<div class="col-md-12" id="info2" style="padding-bottom:20px;">
										<table class="table" style="width:100%; margin-left:20px;">
										<thead>
										<tr style="padding:10px 10px 5px 10px; font-size:14pt; font-weight:700; color:#fff;background-color:#00b050;"><th>No.</th><th style="text-align: left;">Sugar Live Test Cases Passed</th><th style="text-align: left;">Tested Date Time</th><th style="text-align: right;">Test Index(ms)</th><th style="text-align: center;">Result</th></tr>
										
										</thead>
										
										<tbody>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno1"></p></td><td style="text-align: left;"><a href="#" id="pitem1"></a></td><td><p id="ptestdatetime1"></p></td><td style="text-align: right;"><p id="ptestindex1"></p></td><td style="text-align: center;" id="presultbg1"><p id="presult1"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno2"></p></td><td style="text-align: left;"><a href="#" id="pitem2"></a></td><td><p id="ptestdatetime2"></p></td><td style="text-align: right;"><p id="ptestindex2"></p></td><td style="text-align: center;" id="presultbg2"><p id="presult2"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno3"></p></td><td style="text-align: left;"><a href="#" id="pitem3"></a></td><td><p id="ptestdatetime3"></p></td><td style="text-align: right;"><p id="ptestindex3"></p></td><td style="text-align: center;" id="presultbg3"><p id="presult3"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno4"></p></td><td style="text-align: left;"><a href="#" id="pitem4"></a></td><td><p id="ptestdatetime4"></p></td><td style="text-align: right;"><p id="ptestindex4"></p></td><td style="text-align: center;" id="presultbg4"><p id="presult4"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno5"></p></td><td style="text-align: left;"><a href="#" id="pitem5"></a></td><td><p id="ptestdatetime5"></p></td><td style="text-align: right;"><p id="ptestindex5"></p></td><td style="text-align: center;" id="presultbg5"><p id="presult5"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno6"></p></td><td style="text-align: left;"><a href="#" id="pitem6"></a></td><td><p id="ptestdatetime6"></p></td><td style="text-align: right;"><p id="ptestindex6"></p></td><td style="text-align: center;" id="presultbg6"><p id="presult6"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno7"></p></td><td style="text-align: left;"><a href="#" id="pitem7"></a></td><td><p id="ptestdatetime7"></p></td><td style="text-align: right;"><p id="ptestindex7"></p></td><td style="text-align: center;" id="presultbg7"><p id="presult7"></p></td></tr>
										<tr style="padding:10px 10px 5px 10px"><td><p id="pno8"></p></td><td style="text-align: left;"><a href="#" id="pitem8"></a></td><td><p id="ptestdatetime8"></p></td><td style="text-align: right;"><p id="ptestindex8"></p></td><td style="text-align: center;" id="presultbg8"><p id="presult8"></p></td></tr>
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