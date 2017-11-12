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
<link rel="stylesheet" type="text/css" href="css/customstyle2.css">

<script type="text/javascript">

$(window).load(function() {
	$(".se-pre-con").fadeOut("slow");
	callUnsolved();
});

$(".demo1").css("height", "820px");

$.ajax({
	
	url:"helpticketitem_unsolved.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
					$('#unsolvednumber').html(obj["count"]);			
					$('#unsolved').css("background-color","#E72711");					
			}
});

$.ajax({
	
	url:"helpticketitem_closed.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				  
					$('#closednumber').html(obj["count"]);						
					
						$('#closed').css("background-color","#9BBB58");
					
						
			}
	
});

$.ajax({
	
	url:"helpticketitem_total.php",
	type:"POST",
	data: ''
})
.success(function(result)	{

	var obj = jQuery.parseJSON(result);
			if(obj != '')
			{
				 	
					$('#totalnumber').html(obj["count"]);						
					
						$('#total').css("background-color","#A4A4A4");
					
					
			}
	
});


	


// เริ่มจับเวลา

var auto_refresh = setInterval(

function ()
{
	
	$.ajax({
			
			url:"helpticketitem_unsolved.php",
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
								$('#unsolvednumber').html(val["count"]);			
								
							
									$('#unsolved').css("background-color","#E72711");
							
							 });
					}
			
        });

	$.ajax({
			
			url:"helpticketitem_closed.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
		
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 
							$('#closednumber').html(obj["count"]);						
							
								$('#closed').css("background-color","#9BBB58");
						
					}
			
        });

	$.ajax({
			
			url:"helpticketitem_total.php",
			type:"POST",
			data: ''
		})
        .success(function(result)	{
			
			var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						 	
							$('#totalnumber').html(obj["count"]);						
						
								$('#total').css("background-color","#A4A4A4");
						
							
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12" id="unsolved">
						<br>
						<p id="unsolvedtopic">Unsolved</p>
						<br>
						<p id="unsolvednumber"></p>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12" id="closed">
						<br>
						<p id="closedtopic">Closed/Resolved</p>
						<br>
						<p id="closednumber"></p>
					</div>

				</div>
				<div class="row">

					<div class="col-md-12" id="total">
						<br>
						<p id="totaltopic">Total</p>
						<br>
						<p id="totalnumber"></p>
					</div>

				</div>


			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="helpticket">


						<div id="highlight">
							<br>
							<p id="topic2">CRM/HRM Help Ticket</p>
						</div>



						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12" style="margin-top: 5px;">
										<ul class="demo1" style="height: 700px;">
											<li class="news-item"><table cellpadding="4">
													<tr></tr>
												</table></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-footer" style="display: none;"></div>
						</div>


					</div>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	var auto_refresh2;
	var auto_refresh3;
	var auto_refresh4;
	//var countunsolved;
	//var countclosed;
	//var count;
	function callUnsolved(){
	//	alert("Call Unsolved Success!");
		var countunsolved=0;
					  $.ajax({
							
							url:"helptickets.php",
							type:"POST",
							data: ''
						})
				        .success(function(result)	{
						
							var obj = jQuery.parseJSON(result);
									if(obj != '')
									{
									
										 var count = 1;
										  $(".demo1").empty();
										 $(".demo1").css("height", "820px");
										  
										  $.each(obj, function(key, val) {
											
											  var image = count%7;
										      var resolution = val["resolution"];
											  var status = val["status"];
											  var ul;
											  if(status=="Second Level" || status=="Action Needed"){
											  
												if(val["type"]=="Recent"){
													ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
												ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
												ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
												ul = ul + "</tr></table></li>";
												}else if(val["type"]=="Preceding"){
														ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
													ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
													ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
													ul = ul + "</tr></table></li>";
													}
											  }else{
												  if(val["type"]=="Recent"){
														ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
													ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
													ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
													ul = ul + "</tr></table></li>";
													}else if(val["type"]=="Preceding"){
															ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
														ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
														ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
														ul = ul + "</tr></table></li>";
														}

												  }
													$('.demo1').append(ul);
													count = count+1;
										  });
									}
									//countunsolved = count-1;
				        });
					  
					  //countunsolved = count-1;
					
					  auto_refresh2 = setInterval(

								function ()
								{
									  $.ajax({
											
											url:"helptickets.php",
											type:"POST",
											data: ''
										})
								        .success(function(result)	{
										
											var obj = jQuery.parseJSON(result);
													if(obj != '')
													{
													
														  var count = 1;
														  $(".demo1").empty();
														 $(".demo1").css("height", "820px");
														  
														  $.each(obj, function(key, val) {
															
															  var image = count%7;
															  var resolution = val["resolution"];
															  var status = val["status"];
															  var ul;
															  if(status=="Second Level" || status=="Action Needed"){
															  
																if(val["type"]=="Recent"){
																	ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																ul = ul + "</tr></table></li>";
																}else if(val["type"]=="Preceding"){
																		ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																	ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																	ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																	ul = ul + "</tr></table></li>";
																	}
															  }else{
																  if(val["type"]=="Recent"){
																		ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																	ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																	ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																	ul = ul + "</tr></table></li>";
																	}else if(val["type"]=="Preceding"){
																			ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																		ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																		ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																		ul = ul + "</tr></table></li>";
																		}

																  }
																	$('.demo1').append(ul);
																	count = count+1;
																	//alert(count);
														  });
													}
												//	countunsolved = count-1;
												//	alert(count-1);
												//	countunsolved = count-1;
								        });
								      //  alert(countunsolved);
										//alert(countunsolved);
									 // alert(countunsolved);
									  //var x = countunsolved*2000;
									  //alert(x);
									  },27000);
					  //callUnsolved()

					//  callUnsolved();
			
		}
	function callClosed(){
		//	alert("Call Unsolved Success!");
			var countclosed=0;
						  $.ajax({
								
								url:"helptickets_closed.php",
								type:"POST",
								data: ''
							})
					        .success(function(result)	{
							
								var obj = jQuery.parseJSON(result);
										if(obj != '')
										{
										
											  var count = 1;
											  $(".demo1").empty();
											 $(".demo1").css("height", "820px");
											  
											  $.each(obj, function(key, val) {
												
												  var image = count%7;
												  var resolution = val["resolution"];
												  var status = val["status"];
												  var ul;
												  if(status=="Second Level" || status=="Action Needed"){
												  
													if(val["type"]=="Recent"){
														ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
													ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
													ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
													ul = ul + "</tr></table></li>";
													}else if(val["type"]=="Preceding"){
															ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
														ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
														ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
														ul = ul + "</tr></table></li>";
														}
												  }else{
													  if(val["type"]=="Recent"){
															ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
														ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
														ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
														ul = ul + "</tr></table></li>";
														}else if(val["type"]=="Preceding"){
																ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
															ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
															ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
															ul = ul + "</tr></table></li>";
															}

													  }
														$('.demo1').append(ul);
														count = count+1;
											  });
										}
										//countclosed = count-1;
					        });
						  //countclosed = count-1;
						  //var countclosed;
						  auto_refresh3 = setInterval(

									function ()
									{
										  $.ajax({
												
												url:"helptickets_closed.php",
												type:"POST",
												data: ''
											})
									        .success(function(result)	{
											
												var obj = jQuery.parseJSON(result);
														if(obj != '')
														{
														
															  var count = 1;
															  $(".demo1").empty();
															 $(".demo1").css("height", "820px");
															  
															  $.each(obj, function(key, val) {
																
																  var image = count%7;
																	
																  var status = val["status"];
																  var ul;
																  if(status=="Second Level" || status=="Action Needed"){
																  
																	if(val["type"]=="Recent"){
																		ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																	ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																	ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																	ul = ul + "</tr></table></li>";
																	}else if(val["type"]=="Preceding"){
																			ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																		ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																		ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																		ul = ul + "</tr></table></li>";
																		}
																  }else{
																	  if(val["type"]=="Recent"){
																			ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																		ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																		ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																		ul = ul + "</tr></table></li>";
																		}else if(val["type"]=="Preceding"){
																				ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																			ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																			ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																			ul = ul + "</tr></table></li>";
																			}

																	  }
																		$('.demo1').append(ul);
																		count = count+1;
																
															  });
														}
														
														//countclosed = count-1;
									        });
											//alert(countclosed);
									},27000);
						  //callUnsolved()

						//  callUnsolved();
				
			}
	function callTotal(){
		//	alert("Call Unsolved Success!");
			var counttotal = 0;
						  $.ajax({
								
								url:"helptickets_total.php",
								type:"POST",
								data: ''
							})
					        .success(function(result)	{
							
								var obj = jQuery.parseJSON(result);
										if(obj != '')
										{
										
											  var count = 1;
											  $(".demo1").empty();
											 $(".demo1").css("height", "820px");
											  
											  $.each(obj, function(key, val) {
												
												  var image = count%7;
													
												  var status = val["status"];
												  var ul;
												  if(status=="Second Level" || status=="Action Needed"){
												  
													if(val["type"]=="Recent"){
														ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
													ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
													ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
													ul = ul + "</tr></table></li>";
													}else if(val["type"]=="Preceding"){
															ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
														ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
														ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
														ul = ul + "</tr></table></li>";
														}
												  }else{
													  if(val["type"]=="Recent" ){
															ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
														ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
														ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
														ul = ul + "</tr></table></li>";
														}else if(val["type"]=="Preceding"){
																ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
															ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
															ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
															ul = ul + "</tr></table></li>";
															}

													  }
														$('.demo1').append(ul);
														count = count+1;
											  });
										}
										//counttotal = count-1;
					        });
					        //var counttotal;
					        	//counttotal = count-1;
						  auto_refresh4 = setInterval(

									function ()
									{
										  $.ajax({
												
												url:"helptickets_total.php",
												type:"POST",
												data: ''
											})
									        .success(function(result)	{
											
												var obj = jQuery.parseJSON(result);
														if(obj != '')
														{
														
															  var count = 1;
															  $(".demo1").empty();
															 $(".demo1").css("height", "820px");
															  
															  $.each(obj, function(key, val) {
																
																  var image = count%7;
																	
																  var status = val["status"];
																  var ul;
																  if(status=="Second Level" || status=="Action Needed"){
																  
																	if(val["type"]=="Recent"){
																		ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																	ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																	ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																	ul = ul + "</tr></table></li>";
																	}else if(val["type"]=="Preceding"){
																			ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																		ul = ul + "<td><img src='images/Siren.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																		ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																		ul = ul + "</tr></table></li>";
																		}
																  }else{
																	  if(val["type"]=="Recent"){
																			ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																		ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img id='imgnow' class='objblink' src='images/Recent.png' width='60px'></td>";
																		ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																		ul = ul + "</tr></table></li>";
																		}else if(val["type"]=="Preceding"){
																				ul = "<li class='news-item' id='demo1li"+count+"'><table cellpadding='4'><tr>";
																			ul = ul + "<td><img src='images/Siren2.gif' width='20px'></td><td><img class='swingimage' src='images/"+image+".png' width='60px'></td>";
																			ul = ul + "<td><b>"+val["key"]+"</b>&nbsp;&nbsp;&nbsp;"+val["createdDate"]+"<br><a href='"+val["link"]+"'>" + val["topic"] +"</a></td><td></td>";						
																			ul = ul + "</tr></table></li>";
																			}

																	  }
																		$('.demo1').append(ul);
																		count = count+1;
																		//alert(count);
															  });
														}
														//alert(count-1);
														//counttotal = count-1;
									        });
	//alert(counttotal);
									        
									},54000);
						  //callUnsolved()

						//  callUnsolved();
				
			}
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

	        $("#unsolved").on('click',function(){
			  callUnsolved();
			  clearInterval(auto_refresh3);
			  clearInterval(auto_refresh4);
				//win.location;
			 // return false;
		  });
	        $("#closed").on('click',function(){
				  callClosed();
				  clearInterval(auto_refresh2);
				  clearInterval(auto_refresh4);
					//win.location;
				 // return false;
			  });
	        $("#total").on('click',function(){
				  callTotal();
				  clearInterval(auto_refresh2);
				  clearInterval(auto_refresh3);
					//win.location;
				 // return false;
			  });
		 

		 
		  
		  var color1;
		  $("#unsolved").hover(function(){
			  color1 = $( this ).css( "background-color" );

			  if(color1=="rgb(231, 39, 17)"){
					$('#unsolved').css("background-color","#be200e");
				}else if(color1=="rgb(155, 187, 88)"){
					$('#unsolved').css("background-color","#84a343");
				}else if(color1=="rgb(238, 174, 50)"){
					$('#unsolved').css("background-color","#d49311");
				}else{
					$('#unsolved').css("background-color","#8c8c8c");
				}
			  
			
		
		  },function(){
		
			
			  $("#unsolved").css( "background-color", color1);
			  });
		  
		  
		  
		  var color3;
		  $("#closed").hover(function(){
			  color3 = $( this ).css( "background-color" );

			  if(color3=="rgb(231, 39, 17)"){
					$('#closed').css("background-color","#be200e");
				}else if(color3=="rgb(155, 187, 88)"){
					$('#closed').css("background-color","#84a343");
				}else if(color3=="rgb(238, 174, 50)"){
					$('#closed').css("background-color","#d49311");
				}else{
					$('#closed').css("background-color","#8c8c8c");
				}
			  
	
		
		  },function(){
			
			
			  $("#closed").css( "background-color", color3);
			  });
		  
		 

		  var color5;
		  $("#total").hover(function(){
			  color5 = $( this ).css( "background-color" );

			  if(color5=="rgb(231, 39, 17)"){
					$('#total').css("background-color","#be200e");
				}else if(color5=="rgb(155, 187, 88)"){
					$('#total').css("background-color","#84a343");
				}else if(color5=="rgb(238, 174, 50)"){
					$('#total').css("background-color","#d49311");
				}else{
					$('#total').css("background-color","#8c8c8c");
				}
			  
		
		
		  },function(){
		
			
			  $("#total").css( "background-color", color5);
			  });

		 
	       
    });
    
</script>
</body>
</html>