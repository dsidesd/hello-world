<!DOCTYPE HTML >
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=9" />

<html>
<head>
<script>
if (screen.width <= 700) {
window.location = "http://m.sideserfcakes.com";
}	
</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/fancyapps-fancyBox-0ffc358/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="/fancyapps-fancyBox-0ffc358/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/fancyapps-fancyBox-0ffc358/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="/fancyapps-fancyBox-0ffc358/jquery.easing.compatibility.js"></script>
	<script type="text/javascript" src="/fancyapps-fancyBox-0ffc358/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/awstats/analytics.js"></script>
	<script type="text/javascript" src="/js/mootools-1.2.4.js"></script>
	<script type="text/javascript" src="/js/smoothbox.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/smoothbox.css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="/fancyapps-fancyBox-0ffc358/source/jquery.fancybox.css" media="screen" />
	<link rel="shortcut icon" href="images/logo.ico">
	
<title>Sideserf Cake Studio</title>
		
<style type="text/css">

@font-face
{
	font-family:BebasNeue;
	src: url('font/BebasNeue.eot'); /* IE9 Compat Modes */
	src: url('font/BebasNeue.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('font/BebasNeue.woff') format('woff'), /* Modern Browsers */
	     url('font/BebasNeue.ttf')  format('truetype'), /* Safari, Android, iOS */
	     url('font/BebasNeue.svg#svgFontName') format('svg'); /* Legacy iOS */
	}

body {
    /*background-image: url('images/stripe.png');*/
	background-attachment: fixed;
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 56%, #c4c4c4 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(56%,#ffffff), color-stop(100%,#c4c4c4)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 56%,#c4c4c4 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 56%,#c4c4c4 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 56%,#c4c4c4 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 56%,#c4c4c4 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#c4c4c4',GradientType=0 ); /* IE6-9 */
}

html, body {
    padding:0;
	margin:0;
}

.scroller {
    height: 55px;
    width: 1000px;
}
 
.scroller img {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
	opacity:0.4;
	filter:alpha(opacity=40); /* For IE8 and earlier */

}
 
.scroller img:hover {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
	opacity:.8;
	filter:alpha(opacity=80); /* For IE8 and earlier */
}

/*keyframe animations*/
.first {
    -webkit-animation: bannermove 30s linear infinite;
       -moz-animation: bannermove 30s linear infinite;
        -ms-animation: bannermove 30s linear infinite;
         -o-animation: bannermove 30s linear infinite;
            animation: bannermove 30s linear infinite;
}
 
@keyframes "bannermove" {
 0% {
    margin-left: 0px;
 }
 100% {
    margin-left: -1900px;
 }
 
}
 
@-moz-keyframes bannermove {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1900px;
 }
 
}
 
@-webkit-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1900px;
 }
 
}
 
@-ms-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1900px;
 }
 
}
 
@-o-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1900px;
 }
 
}

/* Gradient transparent - color - transparent */ 
hr.style-two { 
	border: 0; 
	width: 70%;
	height: 1px; 
	background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
	background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
	background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
	background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
	}


#contentWrapper {
    width: 100%;
    margin: 0 auto;	background-image:url('/images/wood-texture.jpg');
	background-repeat:repeat-n;
    height: 145px;
	position: fixed;
	top:75px;
}

.shadow {
	box-shadow: 3px 5px 15px #000;
}

p {
	font-size:26px;
	font-family: 'BebasNeue';
	line-height:46px;
	color:#404040;
}

#logo { 
	position: fixed;
	top:0px;
	width:50%;
	margin: 0 auto;
}

.radius{
	border-radius: 15px;
	box-shadow: 0px 3px 15px #000;
}

*/Fancy Box*/	
.fancybox-custom .fancybox-skin {
	box-shadow: 0 0 50px #222;
}

a:hover {
	color:#D16405;
}

a {
	color:#404040;
}

ul {
	list-style:none;
	padding:0;
	margin:auto;
	zoom:1;
	width:100%;
	text-align: center;

}

li {
	float:center;
	width:190px;
	height:45px;
	line-height:45px;
	text-align:center;
	border-right:1px solid #404040;
	border-left:1px solid #404040;
	border-top:2px solid #404040;
	border-bottom:2px solid #404040;
	background-color: #E0E0E0;
	display: inline-block;

}

li a{
	display:block;
	color:#473915;
	text-decoration:none;
	font-family: 'BebasNeue';
	font-size: 20px;
	color: #909090;
}

ul>:first-child {
	border-top-left-radius: 5px;
    border-bottom-left-radius: 5px; 
	border-right:1px solid #404040;
	border-left:2px solid #404040;
	border-top:2px solid #404040;
	border-bottom:2px solid #404040;
}

ul>:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px; 
	border-right:2px solid #404040;
	border-left:1px solid #404040;
	border-top:2px solid #404040;
	border-bottom:2px solid #404040;
}

.fade, .fade1, .fade2 {
   transition: background-color .25s ease-in-out;
   -moz-transition: background-color .25s ease-in-out;
   -webkit-transition: background-color .25s ease-in-out;
 }

.fade1:hover {
	border-top-left-radius: 5px;
    border-bottom-left-radius: 5px; 
	background-color: #f8f8f8;	
 }

.fade2:hover {
	border-top-right-radius: 5px;
    border-bottom-right-radius: 5px; 
	background-color: #f8f8f8;	
}
 
.fade:hover {
	background-color: #f8f8f8;
}	

li a:hover{
	color: #D16405;
}

.slide-out-div {
    padding: 20px;
    width: 250px;
    background: #ccc;
    border: 1px solid #29216d;
    }

#footer {
	float:right;
}

#container {
    overflow: hidden;
    margin: 0px auto;
	vertical-align:top;
	white-space:nowrap;
	position:fixed;
	right:25%;
	left:25%;
}

#spacerA {
	overflow:hidden;
	height:50px;
	width:100%;
}

#spacerB {
	overflow:hidden;
	height:75px;
	top-margin:-100px;
	width:100%;
	position:fixed;
	/*background-image: url('images/stripe.png');*/
	background-color: #E6E6E6;
	border-bottom-width:2px;
	border-bottom-color:black;
	border-bottom-style: solid;
}

.clear			{ clear:both; }
.fancybox		{ padding:5px; margin:5px; border:1px solid #ccc; display:block; width:210px; display:inline-block;vertical-align:text-top;background-color:#fff;}
.fancybox:hover	{ border-color:#D1642D; }

a:hover { 
color: #F0C630;
}

</style>
</head>
<body>
	<div id="spacerB">
	&nbsp;
	</div>
<!--[if IE]>
This site is best viewed with <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> or <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>
<![endif]-->

<!--[if true]><![if !IE]><![endif]-->
<br />

<span style="letter-spacing:5px;font-size:22px;font-color:#404040;right:25%;position:fixed;font-family:'BebasNeue';background: -webkit-linear-gradient(#404040, #696969);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">AS&nbsp;SEEN&nbsp;ON:</span>
<center>
<div id="container">

	<div class="scroller">
		<img src="images/media/thestir-sm.png" style="vertical-align:middle;margin:10px;" class="first">
		<img src="images/media/brooklynvegan-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/ACD-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/abcnews-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/foodnet-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/huffingtonpost-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/LAtimes-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/americanidol-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/aol-on-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/dailymail-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/dailynews-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/foxnews-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/msnow-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/thechew-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/thestir-sm.png" style="vertical-align:middle;margin:10px;" >
		<img src="images/media/brooklynvegan-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/ACD-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/abcnews-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/foodnet-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/huffingtonpost-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/LAtimes-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/americanidol-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/aol-on-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/dailymail-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/dailynews-sm.png" style="vertical-align:middle;margin:10px;">
		<img src="images/media/foxnews-sm.png" style="vertical-align:middle;margin:10px;">
	</div>
</div>
</center>
<!--[if true]><![endif]><![endif]-->
<br />
	<div id="logo" align="center">
		<img src="/images/gold-small.png" style="border:0;">
	</div>

	<div id="spacerA">

	</div><br /><br />
	<div id="wrapper">
		<div id="contact" style="text-align:right;width:80%;">
		<a href="http://instagram.com/sideserfcakes" target="_blank"><img src="/images/instagram.png" onmouseover="this.src='/images/instagram-h.png'" onmouseout="this.src='/images/instagram.png'" border="0" align="center" title="Follow on Instagram!"></a>&nbsp;&nbsp;&nbsp;
		<a href="http://www.facebook.com/nsideserf" target="_blank"><img src="/images/facebook.png" onmouseover="this.src='/images/facebook-h.png'" onmouseout="this.src='/images/facebook.png'" border="0" align="center" title="Like on Facebook!"></a>&nbsp;&nbsp;&nbsp;
		<a href="http://www.twitter.com/sideserfcakes" target="_blank"><img src="/images/twitter.png" onmouseover="this.src='/images/twitter-h.png'" onmouseout="this.src='/images/twitter.png'" border="0" align="center" title="Follow on Twitter!"></a>&nbsp;&nbsp;&nbsp;
		<a href="mailto:info@sideserfcakes.com"><img src="/images/mail.png" onmouseover="this.src='/images/mail-h.png'" onmouseout="this.src='/images/mail.png'"  border="0" align="center" title="Send Us An Email!"></a>
		</div>
<br />
	<ul id="nav">
		<li>
			<div class="fade1"><a class="iframe" href="/about.html">ABOUT</a></div>
		</li><li>
			<div class="fade"><a class="iframe" href="/awards.html">PRESS</a></div>
		</li><li>
		<div class="fade"><a class="iframe" href="/form.html">REQUEST A QUOTE</a></div>
		</li><li>
		<div class="fade"><a class="iframe" href="/faq.html">FAQ</a></div>
		</li><li>
		<div class="fade2"><a class="iframe" href="/contact.html">CONTACT</a></div>
		</li>
	</ul>
</div>
<center>

<br />
<br />

<?php

echo "<center>";

	/*generates thumbnail */
	function make_thumb($src,$dest,$desired_width) {
	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height*($desired_width/$width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
	/* copy source image at a resized size */
	imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
	$files = array();
	arsort($files);
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

/** settings **/
$images_dir = 'images/gallery/';
$thumbs_dir = 'images/thumbs/';
$thumbs_width = 210;
$images_per_row = 4;

/** generate photo gallery **/
$image_files = get_files($images_dir);
sort($image_files);
if(count($image_files)) {
	$index = 0;
	foreach($image_files as $index=>$file) {
		$index++;
		$thumbnail_image = $thumbs_dir.$file;
		if(!file_exists($thumbnail_image)) {
			$extension = get_file_extension($thumbnail_image);
			if($extension) {
				make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
			}
		}

		echo '<a href="',$images_dir.$file,'" class="fancybox" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
		if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
	}
}
else {
	echo '<p>There are no images in this gallery.</p>';
}

echo "</center>";
?>

<br />
<hr />
<span style="text-align:left; font-size:18px; font-family: 'BebasNeue'; color:#404040;">© <script>document.write(new Date().getFullYear())</script>&nbsp; Sideserf Cake Studios. All rights reserved.</span>
</div>

<br />

</center>
<div id='footer'>
<a href="admin.php" target="_blank" style="text-decoration:none; color:#625751; hover:#000000;">Webmaster</a>
</div>
</body>


<script type="text/javascript">
$(document).ready(function() {
			$('.fancybox').fancybox({
		});

			$(".fancybox-thumb").fancybox({
				prevEffect	: 'fade',
				nextEffect	: 'fade',
				helpers	: {
					title	: {
						type: 'outside'
					},
					thumbs	: {
						width	: 50,
						height	: 50
					}
				}
			});
			
			$(".iframe").fancybox({
                'width': 1000,
                'height': 'auto',
                'transitionIn': 'elastic',
                'transitionOut': 'elastic',
                'type': 'iframe',
				'scrolling': 'no'
            });
	});

</script>
</html>
