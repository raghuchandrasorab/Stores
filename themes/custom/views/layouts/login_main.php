<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap_modified.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive_modified.css" rel="stylesheet" />

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/twitter-bootstrap/docs/examples/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->baseUrl; ?>/twitter-bootstrap/docs/examples/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->baseUrl; ?>/twitter-bootstrap/docs/examples/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->baseUrl; ?>/twitter-bootstrap/docs/examples/images/apple-touch-icon-114x114.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->params['location']; ?>logos/favicon.png" type="image/x-icon" />
    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<div style="font-family:verdana;padding:20px;border-radius:10px;border:10px solid #ABABAB;text-align: center;">
	<h3>CornApps</h3>
	</div>
</head>
<body>

	<!-- Part 1: Wrap all page content here -->
	<div id="wrap">
		
		<?php echo $content; ?>
		
		<div id="push"></div>
	
	</div>
	
	<div id="footer">
	  	<div class="container-fluid">
		 	<p style="text-align: center;">
			 	<a href="<?php echo Yii::app()->params['root'];?>/site/page/view/about">www.cornapps.com</a>
			</p>	  
		</div>
	</div>
		
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-transition.js"></script>
    
	<script>
		(function($){
		    $('.row-fluid ul.thumbnails li.span6:nth-child(2n + 3)').css('margin-left','0px');
		    $('.row-fluid ul.thumbnails li.span4:nth-child(3n + 4)').css('margin-left','0px');
		    $('.row-fluid ul.thumbnails li.span3:nth-child(4n + 5)').css('margin-left','0px'); 
		})(jQuery);

		$(document).ready(function() {
			$('#tooltip').tooltip('hide')
		});

	</script>
</body>
</html>