<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Movie Review</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link href="{{asset('frontTemplate/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<script src="{{asset('frontTemplate/bootstrap-5.1.3-dist\js\respond.min.js')}}"> </script>
	<link rel="stylesheet" href="{{asset('AdminLET/plugins/fontawesome-free/css/all.min.css')}}">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="{{asset('frontTemplate/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontTemplate/style.css')}}">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
	<style>
		body {
			/* background-repeat: repeat-y; */
			background-image: none;
			background-color: #000000;
			background-image: linear-gradient(90deg, #000000 0%, #d20834 55%, #150005 100%);
		}

		.main-content {
			background-size: cover;
			background-repeat: repeat-y;
		}


		.main-navigation .menu-item.current-menu-item:after,
		.main-navigation .menu-item:hover:after {
			background-color: #DE0A0A;
		}

		.flex-next,
		.flex-prev {
			color: #DE0A0A;
		}

		.slider .flex-direction-nav a:hover {
			background-color: #DE0A0A;
			color: #fff;
		}

		.main-content .container {
			background-color: rgba(51, 51, 51, 0.995);
		}



		.reviews .container {

			background-color: #474242ab;
			text-align: center;
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.58);
			border-radius: 5px;
			margin-top: 0px;
			margin-bottom: 70px;

			justify-content: center;


		}


		.card {
			border: none
		}

		.profile img {
			width: 70px;
			height: 70px;
			border-radius: 50%
		}

		.second {
			border-left: 2px dotted lightgrey;
			border-right: 2px dotted lightgrey
		}

		@media only screen and (max-width: 600px) {
			.second {
				border: none;
				border-top: 2px dotted lightgrey;
				margin-top: 25px
			}

			.third {
				border-top: 2px dotted lightgrey;
				margin-top: 25px
			}

			.icon {
				margin-top: 20px;
				top: 0
			}
		}

		.fa-quote-left:before {
			font-size: 10px;
			color: #DE0A0A;
			position: relative;
			bottom: 5px
		}

		.fa-quote-right::before {
			font-size: 10px;
			color: #DE0A0A;
			position: relative;
			bottom: 5px
		}

		.intro {
			font-size: 11px;
			margin-left: 13px;
			position: relative;
			bottom: 8px
		}


		.company {
			position: absolute;
			bottom: -42px
		}



		.icon {
			margin-bottom: 15px;
			position: relative;
			bottom: 20px;


		}

		.header {
			padding-top: 35px;
			padding-bottom: 50px
		}

		.card-subtitle {
			color: #e0e0e0;
			font-size: 16px;
			font-weight: 700;
		}

		.card-content {
			padding-left: 20px;
			padding-right: 20px;
		}




		.ratings i {
			color: yellow;
		}

		.txt {
			margin-top: 30px;
			color: #e0e0e0;
			text-align: center;
			margin-left: 100px;
			margin-right: 100px;
			text-transform: capitalize;
		}

		.site-content {
			background-image: url(dummy/background.jpg);
			background-size: cover;
		}

		.site-footer {
			background-color: #333;
			margin-top: 50px;
		}

		.widget .widget-title {
			color: #DE0A0A;
			font-weight: 500;

		}
	</style>

	@yield('css')

</head>


<body>


	<div id="site-content">