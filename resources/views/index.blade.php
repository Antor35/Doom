<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DoomOS | Redefine the way of workstation</title>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="/css/doom.css">
	<link rel="stylesheet" type="text/css" href="/css/drum.css">
	<link rel="stylesheet" type="text/css" href="/css/colorGame.css">
	<link rel="stylesheet" type="text/css" href="/css/calculator.css">
  	<link rel="stylesheet" type="text/css" href="/css/mole.css">
  	<link rel="stylesheet" type="text/css" href="/css/drawingboard.min.css">
  	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

  	
</head>
<body>
	<div id="applications">

		@include('all_app.setting')
		
		@include("all_app.launcher")

		@include("all_app.drum_kit")

		@include("all_app.color_game")

		@include("all_app.mole_game")
		
		@include("all_app.drawing")

		@include("all_app.calculator")

	</div>
	<div id="system_tray">
		@include("all_app.app_list");
	</div>


	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/doom.js"></script>
	<script type="text/javascript" src="/js/clock.js"></script>
	<script type="text/javascript" src="/js/drum.js"></script>
	<script type="text/javascript" src="/js/colorGame.js"></script>
	<script type="text/javascript" src="/js/mole.js"></script>
	<script type="text/javascript" src="/js/calculator.js"></script>
	<!-- <script type="text/javascript" src="js/widgEditor.js"></script> -->
	<script type="text/javascript" src="/js/drawingboard.min.js"></script>
	<script>
		var drawingboard = new DrawingBoard.Board('drawing_board', {
			controls: [
				'Color',
				{ Size: { type: 'dropdown' } },
				{ DrawingMode: { filler: false } },
				'Navigation',
				'Download'
			],
			size: 1,
			webStorage: 'session',
			enlargeYourContainer: true
		});
	</script>
</body>
</html>