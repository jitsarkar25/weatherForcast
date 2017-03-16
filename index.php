
<!doctype html>
<html>
<head>
 <title>Weather today</title>
 <meta charset="utf-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"rel="stylesheet">
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 <style type="text/css">
 html,body{
 margin:0 !important;
	padding:0 !important;
	height:100%;
 }
	.container{
	background-image:url("back2.jpg");
	opacity:0.9;
	height:100%;
	width:100%;
	padding-top:150px;
    margin:0 !important;

	background-size:cover;
	background-position:center;
	}
	.center{
		text-align:center;
		
	}
	.white{
		color:white;
	}
	.container{
		
	}
	.bold{
	 font-family: fantasy,Verdana, Arial, Helvetica, sans-serif;
	}
	#result{
		display:none;
		margin-top:15px;
	}
		#error{
		display:none;
		margin-top:15px;
	}
</style>
</head>
<body>
<div id="back">
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 center">
			<h1 class="center white bold"> Weather Predictor</h1>
			<p class="lead center white"> Enter your city and get the weather forecast </p>
			<form>
				<div class="form-group">
				<input id="find" class="form-control " type="text" placeholder="Eg. Kolkata, Mumbai, Chennai..."/>
				</div>
				<button id="search" class="btn btn-success btn-lg" name="submit">Find my weather</button>
			  
			</form>
			
		</div>
		<div class="col-md-6 col-md-offset-3 center">
			<div class="alert alert-success" id="result"></div>
			<div class="alert alert-danger" id="error"></div>
		</div>
	</div>
</div>


</div>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
	<script>
	$(".container").css("min-height",$(window).height());
	
	</script>
	<script>
	

		$("#search").click(function(event){
			event.preventDefault();
			if($("#find").val()!=""){
			
			$.get("scrapper.php?city="+$("#find").val(),function(data){
				
				if(data=="Enter")
				{
					$("#result").hide();
					$("#error").html("Could not find weather for your city. Try again..").fadeIn();
				}
					else{
						$("#error").hide();
						$("#result").html(data).fadeIn();
					}
			});
			}else{
				$("#result").hide();
				$("#error").html("Please enter a city name").fadeIn();
			}
		});
	</script>
</body>
	
</html>