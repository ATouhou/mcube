<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
	<title>
		<? if(isset($this->data['html']['title'])) { echo $this->data['html']['title'];} else { echo "MCube"; }
		   if(isset($title)) { echo " | ".$title;}
		?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="themes-lab" name="author" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="ap-4Vcs5Y1bI5OdR6dI5rKITbpnCmtdhojnSVvoZ_-U" />
	<?php if(isset($html['meta'])) echo meta($html['meta']);?>
	<link rel="shortcut icon" type="image/x-icon" href="system/application/img/icons/favicon.ico">
    <base href="<?=base_url()?>">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link rel="stylesheet" type="text/css" href="system/application/css/icons/icons.min.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/plugins.min.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/style.min.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/custom.css" />
	<link href="system/application/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="system/application/plugins/metrojs/metrojs.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="system/application/css/jquery.alerts.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/jquery.ui.datepicker.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/jquery.ui.theme.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/jquery.timepicker.css" />
	<link rel="stylesheet" type="text/css" href="system/application/css/jquery-ui.css" />
	<!--<link rel="stylesheet" href="system/application/plugins/magnific/magnific-popup.css">-->
    <!-- END  MANDATORY STYLE -->
    <script src="system/application/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<? if(isset($file) && file_exists($file))require_once($file);?>
	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-75378340-2', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
