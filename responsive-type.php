<?php
// Get user fonts or default to Georgia
$fonts = ($_GET['font']) ? trim(htmlspecialchars($_GET['font']), ",") : 'Georgia';
$fonts = explode(",", $fonts);
$count = count($fonts);

// Define font sizes
$normal = array('12','14','16');
$heading = array('16','18','21','24','36','48');
$small = array('10','11','12');

// Work out the width
$width = round(100 / $count, 4);

// See if Typekit is needed
$typekit = ($_GET['typekit']) ? htmlspecialchars($_GET['typekit']) : null;

// See if you'd rather use Google Web Fonts
$google = ($_GET['google']) ? str_replace(" ", "+", htmlspecialchars($_GET['google'])) : null;
?>
<!doctype html>

<!-- 
320 and Up by Andy Clarke
Version: 3.0
URL: http://stuffandnonsense.co.uk/projects/320andup/
Apache License: v2.0. http://www.apache.org/licenses/LICENSE-2.0
PHP'd: Conor MacNeill (http://twitter.com/thefella)
-->

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Type readability reference | Fashionably Flexible Responsive Web Design</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
html,body{margin:0;padding:0;}
h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,cite,code,del,dfn,em,img,q,s,samp,small,strike,strong,sub,sup,tt,var,dd,dl,dt,li,ol,ul,fieldset,form,label,legend,button,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;font-weight:normal;font-style:normal;font-size:100%;line-height:1;font-family:inherit;}
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block;}
audio[controls],canvas,video{display:inline-block;*display:inline;*zoom:1;}
html{overflow-y:scroll;background:#fff;font-size:62.5%;}
body { padding : 22px; font-size:16px;font-size:1.6rem;font-family:Georgia,"Times New Roman",Times,serif;color:#282828;background-color:transparent; }
h2 { margin-bottom : .75em; font-weight : bold; font-size : 36px; }
div { margin-bottom : 1.5em; padding-bottom : 1.5em; border-bottom : 1px solid #ccc;
}
p { margin-bottom : 22px; line-height : 1.5; }
h3 { margin-bottom : 22px; font-weight : bold; }
p.caption { display : inline-block; padding : 6px; font-size : 12px; text-transform : uppercase; background-color : #ccc; }
article { overflow : hidden; }
span.font-name { display : block; font-size : 14px; color : #ccc; padding-bottom : 0.25em; }
@media only screen and (min-width: 480px) { 
	article { float : left; width : <?php echo $width ?>%; }
	<?php if ($count > 1) : ?>article div, article h2 { margin-left : 10%; margin-right : 10%; } <?php endif; ?>
}
</style>
<?php if (isset($typekit)) : ?>
<script type="text/javascript" src="http://use.typekit.com/<?php echo $typekit ?>.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php endif; ?>
<?php if (isset($google)) : ?>
<link href="http://fonts.googleapis.com/css?family=<?php echo $google ?>" rel="stylesheet" type="text/css">
<?php endif; ?>
</head>

<body>
<?php foreach ($fonts as $font) : ?>
<article id="<?php echo str_replace(" ", "", strtolower($font)) ?>" style="font-family:'<?php echo $font ?>';">

<h2><span class="font-name"><?php echo $font ?></span> Type readability reference</h2>
<?php foreach ($normal as $size) : ?>
<div><p style="font-size:<?php echo $size ?>px">When a new medium borrows from an existing one, some of what it borrows makes sense, but much of the borrowing is thoughtless, &#8220;ritual&#8221;, and often constrains the new medium. Over time, the new medium develops its own conventions, throwing off existing conventions that don&#8217;t make sense.</p><p class="caption"><?php echo $size ?>px</p></div>
<?php endforeach; ?>

<h2><span class="font-name"><?php echo $font ?></span> Heading word wrap reference</h2>
<?php foreach ($heading as $size) : ?>
<div><h3 style="font-size:<?php echo $size ?>px">When a new medium borrows from an existing one</h3><p class="caption"><?php echo $size ?>px</p></div>
<?php endforeach; ?>

<h2><span class="font-name"><?php echo $font ?></span> Small type size reference</h2>
<?php foreach ($normal as $size) : ?>
<div><p style="font-size:<?php echo $size ?>px">Small type size reference</p><p class="caption"><?php echo $size ?>px</p></div>
<?php endforeach; ?>

</article>
<?php endforeach; ?>

<?php if (($_GET['js']) != 'no') : ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
/**
 * JavaScript code to detect available availability of a 
 * particular font in a browser using JavaScript and CSS. 
 * 
 * Author : Lalit Patel
 * Website: http://www.lalit.org/lab/jsoncookies
 * License: Apache Software License 2.0
 *          http://www.apache.org/licenses/LICENSE-2.0
 * Version: 0.15 (21 Sep 2009)
 *          Changed comparision font to default from sans-default-default, 
 *          as in FF3.0 font of child element didn't fallback 
 *          to parent element if the font is missing.
 * Version: 0.2 (04 Mar 2012)
 *          Comparing font against all the 3 generic font families ie, 
 *          'monospace', 'sans-serif' and 'sans'. If it doesn't match all 3 
 *          then that font is 100% not available in the system
 */

/**
 * Usage: d = new Detector();
 *        d.detect('font name');
 */
var Detector = function(){
	// a font will be compared against all the three default fonts.
	// and if it doesn't match all 3 then that font is not available.
	var baseFonts = ['monospace','sans-serif','sans'];	
	
	//we use m or w because these two characters take up the maximum width. 
	// And we use a LLi so that the same matching fonts can get separated
	var testString = "mmmmmmmmmmlli";
	
	//we test using 72px font size, we may use any size. I guess larger the better.
	var testSize = '72px';
	
	var h = document.getElementsByTagName("body")[0];

	// create a SPAN in the document to get the width of the text we use to test
	var s = document.createElement("span");
	s.style.fontSize   = testSize;			
	s.innerHTML        = testString;
	var defaultWidth   = {};
	var defaultHeight  = {};
	for(var index in baseFonts) {
		//get the default width for the three base fonts
		s.style.fontFamily = baseFonts[index];
		h.appendChild(s);
		defaultWidth[baseFonts[index]]   = s.offsetWidth;  //width for the default font
		defaultHeight[baseFonts[index]]  = s.offsetHeight; //height for the defualt font
		h.removeChild(s);
	}

	function detect(font) {
		var detected = false;
		for(var index in baseFonts) {
			s.style.fontFamily = font + ',' + baseFonts[index];	// name of the font along with the base font for fallback.
			h.appendChild(s);
			var matched = (s.offsetWidth != defaultWidth[baseFonts[index]] || s.offsetHeight != defaultHeight[baseFonts[index]]);
			h.removeChild(s);
			detected = detected || matched;
		}
		return detected;
	}
	
	this.detect = detect;	
};
var detective = new Detector();
<?php foreach ($fonts as $font) : ?>
var colour,title;
if (detective.detect('<?php echo $font ?>') === true) {
	colour = '#6fbf4d';
	title = "Your font should be displayed!";
} else {
	colour = '#e06666';
	title = "Dammit, your font is missing.";
}
var box = '<span style="display:inline-block; width:9px; height:9px; margin-right:6px; background-color:'+colour+';" title="'+title+'"></span>';
var element = $("#<?php echo str_replace(" ", "", strtolower($font)) ?> h2 span");
element.prepend(box);
<?php endforeach; ?>
</script>
<?php endif; ?>
</body>
</html>