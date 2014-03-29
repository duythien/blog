<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutplus</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300italic,400italic,500italic&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
 <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet"> -->	
 	<?php echo $this->tag->stylesheetLink('css/font-awesome.css'); ?> 

    <?php echo $this->tag->stylesheetLink('css/bootstrap.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/bootstrap-responsive.css'); ?>
	<?php echo $this->tag->stylesheetLink('css/style.css'); ?> 
			
 	


 	<?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
 	<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>

 	
 	</head>
	<body>

		<?php echo $this->getContent(); ?>
	</body>
		

</html>