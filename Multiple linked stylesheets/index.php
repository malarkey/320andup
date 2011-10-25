<?php defined('_JEXEC') or die;

/* =====================================================================
Template:	320 and Up template for Joomla 1.7						            
Author: 	Seth Warburton - Internet Inspired! - @Nternetinspired				            
Version: 	0.1 											             
Sources:	320andup by Andy Clarke http://about.me/malarkey and Keith Clark http://twitter.com/keithclarkcouk - http://stuffandnonsense.co.uk/projects/320andup/						         
License: 	License: http://creativecommons.org/licenses/MIT
/* ===================================================================== */
?>

<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><html class="no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><html class="no-js" lang="en"><![endif]-->

<head>
<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

<!-- For all browsers -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css">
<link rel="stylesheet" media="print" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/print.css">
<!-- For progressively larger displays -->
<link rel="stylesheet" media="only screen and (min-width: 480px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/480.css">
<link rel="stylesheet" media="only screen and (min-width: 600px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/600.css">
<link rel="stylesheet" media="only screen and (min-width: 768px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/768.css">
<link rel="stylesheet" media="only screen and (min-width: 992px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/992.css">
<link rel="stylesheet" media="only screen and (min-width: 1382px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/1382.css">
<!-- For Retina displays -->
<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/2x.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript - jQuery moved here to prevent Joomla extension breakage -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/modernizr-2.0.6.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jquery-1.6.2.min.js"></script>

<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico">

<!--iOS. Delete if not required -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/splash.png">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->

<!--Joomla! generated head -->
<jdoc:include type="head" />
</head>

<body class="clearfix">

<header role="banner">
<jdoc:include type="modules" name="banner" style="XHTML" />
</header>

<div class="content clearfix">

<div role="main">
<jdoc:include type="modules" name="main" style="XHTML" />
</div>

<div role="complementary">
<jdoc:include type="modules" name="complementary" style="XHTML" />
</div>
</div>

<footer role="contentinfo" class="clearfix">
<jdoc:include type="modules" name="footer" style="XHTML" />
</footer>

<!-- Scripts -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
yepnope({
	test : Modernizr.mq('(min-width)'),
	nope : ['<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/respond.min.js']
});
</script>

<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


</body>
</html>