<html>
<head>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<div class="site-wrapper">
			<?php echo $content; ?>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
		    $('.carousel').carousel({
		    	interval: 2000
		    });  
		});
	</script>


</body>
</html>