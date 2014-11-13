<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Zphalcon TEAM">
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}">
    <meta property="og:title" content="Zphalcon">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:url" content="http://www.Zphalcon.com">
    <title>Zphalcon</title>

	{{ this.assets.outputCss() }}

</head>
<body>

	{{ content() }}

	{{ this.assets.outputJs() }}
	
	{% block scripts %}{% endblock %}
</body>
</html>