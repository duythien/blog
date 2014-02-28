<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutplus</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300italic,400italic,500italic&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
 <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet"> -->	
 	{{stylesheet_link ('css/font-awesome.css')}} 

    {{ stylesheet_link('css/bootstrap.css') }}
    {{ stylesheet_link('css/bootstrap-responsive.css') }}
	{{stylesheet_link ('css/style.css')}} 
			
 	{#<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	#}


 	{{javascript_include('js/jquery.min.js')}}
 	{{javascript_include('js/bootstrap.min.js')}}

 	
 	</head>
	<body>

		{{ content() }}
	</body>
		

</html>