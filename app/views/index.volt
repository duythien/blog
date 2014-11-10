<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutplus</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300italic,400italic,500italic&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>	
    {{ stylesheet_link('css/bootstrap.css') }}
	{{stylesheet_link ('css/style.css')}} 
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 	{#<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	#}


 	{{javascript_include('js/jquery.min.js')}}
 	{{javascript_include('js/bootstrap.min.js')}}

 	
 	</head>
	<body>

		{{ content() }}
	</body>
		

</html>