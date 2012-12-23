<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>ProximityBBDOWebFramework</title>
	<meta name="description" content="ProximityBBDO" />
	<meta name="author" content="ProximityBBDO" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
  <link rel="shortcut icon" href="<?= Asset::get_file('favicon.png', 'img'); ?>" />
	<link rel="apple-touch-icon" href="<?= Asset::get_file('apple-touch-icon.png', 'img'); ?>" />
	
  <?= Asset::css('style.css'); ?>
	
  <?= Asset::js('libs/modernizr-2.6.1.min.js'); ?>
</head>
<body>

  <?= $content; ?>

  <script src="//code.jquery.com/jquery-1.8.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= Asset::get_file('libs/jquery-1.8.1.min.js', 'js'); ?>"><\/script>')</script>

  <!--[if (gte IE 6)&(lte IE 8)]><?= Asset::js('libs/selectivizr.js'); ?><![endif]-->	
  <?= Asset::js('tracking.min.js'); ?>
  <?= Asset::js('base.min.js'); ?>

  <script>
    var _gaq = [['_setAccount','xxxxxxxxxxxxx'], ['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <noscript>Your browser does not support JavaScript!</noscript> 
  
</body>
</html>
