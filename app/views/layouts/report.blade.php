<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Precise</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
		}
	</style>
</head>
<body>
	<table style="width:400px", BORDER="0">
	<th>{{link_to_route('clienthub', 'Client Hub')}}</th>
	<th>{{link_to_route('marketinghub', 'Marketing Hub')}}</th>
	<th>{{link_to_route('servicehub', 'Services')}}</th><tr>
	<th>{{link_to_route('workerhub', 'Worker')}}</th>
</table><br>
		@yield('content')
	</div>
</body>
</html>