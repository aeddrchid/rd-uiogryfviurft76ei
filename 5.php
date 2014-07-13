<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->

<html lang="en" class="no-js" manifest="cache.appcache">

<head>

	<title>Googol GLaDOS:simulator</title>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="A HTML5 Simulator of the animation Googol GLaDOS">
		<meta name="viewport" content="width=device-width">
		<link href="img/GDOS.gif" rel="shortcut icon" >
		<link rel="icon" type="image/png" href="favicon.png">
		<link href="css/icons.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/normalize.min.css" rel="stylesheet" >
		<link href="css/docs.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" >
		<link href="css/animate-custom.css" rel="stylesheet">
		<link href="css/flat-ui.css" rel="stylesheet">
		<link href="css/fonts.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
       	<link href="css/real-world.css" rel="stylesheet">
       	<link href="css/modern-buttons.css" rel="stylesheet">

		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone4.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad3.png" />

		<!--THEY LOAD ONE BY ONE IN PRECEDING ORDER.-->


		<style type="text/css">

		@import url(https://fonts.googleapis.com/css?family=Averia+Sans+Libre);

		@import url(https://fonts.googleapis.com/css?family=Press+Start+2P);

		p

		{
			font-family: 'Averia Sans Libre', cursive;
			font-size: 48px;
			color: #2e3436;
		}


		h1
		{
			font-family: 'Conv_Catull';

		}

		div {
		width:128px;
		height:128px;
		  margin: auto;
		}

		.Googol_Colour {
			color: #2E5CEB;
		}
		.Googol_Colour_0 {
			color: #E92D3F;
		}
		.Googol_Colour_1 {
			color: #FDBA17;
		}
		.Googol_Colour_2 {
			color: #2E5CEB;
		}
		.Googol_Colour_3 {
			color: #E92D3F;
		}
		.Googol_Colour_4 {
			color: #069519;
		}
		.Googol_Colour_5 {
			color: #FDBA17;
		}
		.Googol_Colour_6 {
			color: #069519;
		}
		.Googol_Colour_7 {
			color: #E92D3F;
		}
		.Googol_Colour_8 {
			color: #2E5CEB;
		}
		.Googol_Colour_9 {
			color: #E92D3F;
		}
		.Googol_Colour_10 {
			color: #2E5CEB;
		}

		.Googol_Simulator_Font_Colour {
			font-family: 'Averia Sans Libre', cursive;
			color:#333
			font-size: 32px;
		}

<style>
#bowlG{
position:relative;
width:128px;
height:128px;
}

#bowl_ringG{
position:absolute;
width:128px;
height:128px;
border:11px solid #16789C;
-moz-border-radius:128px;
-webkit-border-radius:128px;
-ms-border-radius:128px;
-o-border-radius:128px;
border-radius:128px;
}

.ball_holderG{
position:absolute;
width:34px;
height:128px;
left:47px;
top:0px;
-moz-animation-name:ball_moveG;
-moz-animation-duration:0.8s;
-moz-animation-iteration-count:infinite;
-moz-animation-timing-function:linear;
-webkit-animation-name:ball_moveG;
-webkit-animation-duration:0.8s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-timing-function:linear;
-ms-animation-name:ball_moveG;
-ms-animation-duration:0.8s;
-ms-animation-iteration-count:infinite;
-ms-animation-timing-function:linear;
-o-animation-name:ball_moveG;
-o-animation-duration:0.8s;
-o-animation-iteration-count:infinite;
-o-animation-timing-function:linear;
animation-name:ball_moveG;
animation-duration:0.8s;
animation-iteration-count:infinite;
animation-timing-function:linear;
}

.ballG{
position:absolute;
left:0px;
top:-30px;
width:51px;
height:51px;
background:#FFAA00;
-moz-border-radius:43px;
-webkit-border-radius:43px;
-ms-border-radius:43px;
-o-border-radius:43px;
border-radius:43px;
}

@-moz-keyframes ball_moveG{
0%{
-moz-transform:rotate(0deg)}

100%{
-moz-transform:rotate(360deg)}

}

@-webkit-keyframes ball_moveG{
0%{
-webkit-transform:rotate(0deg)}

100%{
-webkit-transform:rotate(360deg)}

}

@-ms-keyframes ball_moveG{
0%{
-ms-transform:rotate(0deg)}

100%{
-ms-transform:rotate(360deg)}

}

@-o-keyframes ball_moveG{
0%{
-o-transform:rotate(0deg)}

100%{
-o-transform:rotate(360deg)}

}

@keyframes ball_moveG{
0%{
transform:rotate(0deg)}

100%{
transform:rotate(360deg)}

}

</style>

	</style>


		<script>

		    var countdown=13;
		    function ticker(){
			if(countdown==4){next();}
			else{countdown=countdown-1;document.getElementById('countdownnumber').innerHTML=countdown;setTimeout("ticker()",1000);}
		    }

		</script>

</head>

	<body>

		<script>

 			window.history.replaceState('Object', 'Title', '/app');

		</script>

	<center>

	<br>
<body>
    <br>
	<br>
	<br>
    <br>
	<br>
	<br>
	<br>
	<br>
    <br>
	<br>
	<br>
<center>
	<div id="bowlG" class="animated fadeInRight">
<div id="bowl_ringG" class="animated fadeInRight">
<div class="ball_holderG" class="animated fadeInRight">
<div class="ballG" class="animated fadeInRight">
</div>
</div>
</div>
</div>
    <br>
	<br>
	<br>
    <br>
</center>
    <p class="animated fadeInRight">Booting in <span class="Googol_Simulator_Font_Colour" id="countdownnumber">9</span></p>

    <script>ticker()</script>

	</center>

	<!-- Load JS here for the greater good =============================-->

	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.dropkick-1.0.0.js"></script>
	<script type="text/javascript" src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/custom_checkbox_and_radio.js"></script>
	<script type="text/javascript" src="js/custom_radio.js"></script>
	<script type="text/javascript" src="js/jquery.tagsinput.js"></script>
	<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
	<script type="text/javascript" src="js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="js/bootstrap-button.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="js/bootstrap-affix.js"></script>
    <script type="text/javascript" src="js/application.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="https://vjs.zencdn.net/c/video.js"></script>
	<script type="text/javascript" src="js/application.js"></script>


	<script>

     function next()

     {

      $("body").fadeOut(400);

    $.get("/app?s=6", function(data){

      $("body").fadeIn(800);
      window.location="/app?s=6";
    });

    }

	</script>



	<!-- Load JS here for the greater good =============================-->


</body>


</html>