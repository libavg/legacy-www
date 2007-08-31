<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<meta name="author" content="Ulrich von Zadow">
    <meta name="keywords" content="python, multimedia, flash, director, adobe, exhibit, processing, opengl"
	<title>libavg</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<style type="text/css">	
	
	</style>
	<script language="JavaScript" src="mouseovertext.js" type=
"text/javascript"></script>
</head>

<body>
  <? include "navi.php"?>
  <? include "showcase.php"?> 
  <div id="content" width="100"><h1>Features</h1>
    
<p> 
libavg includes a hardware-accelerated display mixer and screen layout engine and integrates high-performance video playback. It supports paragraph-level text layout and rendering as well as cameras. Nearly all parameters can be changed at runtime using python scripts. Input is supported using mouse, keyboard and touchscreens. Among others, libavg projects have used motors, coin rejectors and relays attached to parallel and serial ports, worked with usb bluetooth dongles and integrated printing.</p>

<h2 class="news">Screen Layout Engine</h2> 


<p>The screen layout engine is at the heart of avg. It is responsible for dealing with graphical elements (images, videos, text, camera output) in a generic way and for putting these on the screen. Among others, it supports:</p>
<ul>
<li>Hierarchial layouts</li>
<li>Cropping </li>
<li>Scaling</li>
<li>Rotation</li>
<li>Element-level transparency</li> 
<li>Image alpha channels</li>
<li>Additive and subtractive as well as averaging blend modes</li>
<li>Subpixel precision for smooth animations</li>
<li>Hardware-accelerated OpenGL rendering</li>
<li>Warping and mirroring of elements</li>
</ul>


<h2 class="news">Video Support</h2> 
<p>libavg video support means:</p>
<ul>
<li>Playback pause and restart, playback at user-determined framerates</li>
<li>Complete display engine integration, including cropping, scaling, rotation and transparency</li>
<li>Very high performance: An Athlon 64 2.0 GHz machine can display 10 352x240 videos at once at 60 frames per second.</li>
<li>Seeks at interactive rates: The same computer displays every third frame of a 1536x1024 video running backwards, also at 60 frames per second.</li>
</ul>


<h2 class="news">Text Support</h2> 
<p>Text rendering is supported with:</p>
<ul>

<li>Paragraph-level layout using html &lt;div&gt;-like syntax</li>
<li>Bold/italic etc.</li>
<li>Colored text</li>
<li>Left-/Right-justified as well as centered paragraphs</li>
<li>Kerning and antialiasing</li>
<li>Full internationalization using utf8: Arabic, Chinese and Hebrew are all rendered correctly and can be mixed</li>
<li>Layout - including font face and size - changes in mid-paragraph</li>
</ul>


<h2 class="news">Camera Support</h2> 
<p>libavg supports a wide variety of firewire and Video4Linux cameras with resolutions up to 1024x768. Setting camera parameters such as brightness, exposure, saturation and gamma is also possible.</p>


<h2 class="news">Animation</h2>
<p>libavg has built-in support for smooth time-based animations. Any numeric attribute of a node - x, y, angle, etc. - can be animated with a single line of code to create linear and spline-based movements.


<h2 class="news">Tracking</h2>
<p>libavg was used as the basis for the c-base MultiTouch Console MTC (<a href="http://www.multitouch.de">http://www.multitouch.de</a>) and thus supports camera tracking and multitouch surfaces built using firewire and Video4Linux cameras. 

<h2 class="news">Authoring</h2> 
<p>All of python is available for scripting. libavg directly provides:</p>
<ul>


<li>Properties of display elements as python variables</li>
<li>Function calls when input events happen</li>
<li>Timers (setTimeout, setInterval)</li>
<li>Support for logging</li>
<li>High-level profiling to find performance bottlenecks</li>
<li>High-precision frame timing and synchronization to vertical blanking for smooth animations</li>
</ul>
	
  </div>
  
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2440175-1";
urchinTracker();
</script>
</body>
</html>
