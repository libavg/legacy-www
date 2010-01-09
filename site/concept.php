<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<meta name="author" content="Ulrich von Zadow">
    <meta name="keywords" content="python, multimedia, flash, director, adobe, exhibit, processing, opengl, mission">
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
<div id="content" width="100"><h1>Concept</h1>
<p>
libavg is targeted at interactive installations. These can be terminals in museums, interactive displays in public transport terminals or shopping malls,  artistic installations, or other installations in public places. All these types of applications need the same basic functionality, and they need things that no other genre needs. libavg is a framework that delivers this functionality: high-quality interactive visuals and sound as well as support for diverse hardware for input and output.

<h2 class="news">The Basic Idea</h2>
<p>
The basic idea is that scripting installations should be as easy as building a web page where possible and allow you full freedom of expression where not. While web pages are built using html for the layout and JavaScript to make things interactive, libavg uses an xml-based layout language and Python for the interactivity. The layout language is called avg, and where appropriate (image and div nodes, for instance), it looks a lot like html. Put in another way, libavg gives you a 2D scene graph with images, videos and text layout and allows you to easily manipulate it.

<p>
As an example, here is an avg file that displays a bitmap on the screen:

<pre>
&lt;avg id="mainavgnode" width="640" height="480"&gt;
  &lt;image id="logo" x="0" y="0" z="1" href="avglogo.tif" 
         onmouseover="disappear"/&gt;
&lt;/avg&gt;
</pre>
<p>
And this is a python snippet that gets called when the user moves the mouse over the bitmap and makes it disappear:

<pre>
def disappear():
    logoNode = AVGPlayer.getElementByID("logo")
    logoNode.opacity = 0
</pre>

<p>
A full list of the things that libavg currently supports can be found on the features page.

<h2 class="news">Efficient Development</h2>

<p>
This theme of efficient development is at the heart of a lot of libavg features. For one, Python is a scripting language that allows quick prototyping and turnaround times when customers or users want things changed. Debugging is easy not only because python code is easy to debug in general (it is), but also because libavg includes things like a configurable logger and memory allocation dumping. Also, since it's open source, you can always have a look at what libavg actually does inside if something seems strange.

<p>
There is a plugin mechanism that allows you to expand libavg in any direction you like when the builtin features are not enough.

<h2 class="news">Hardware Support</h2>
<p>
libavg is geared towards exhibits that use unusual devices for input and output. Mice, touchscreens, and even multitouch devices are supported out of the box. Things like integration with microcontroller-based hardware are easy because they are easy in python anyway. More complicated devices can be integrated by writing an appropriate plugin - this is what we did, for instance, when we wanted support for a Wii controller.

<h2 class="news">Professional Quality</h2>

<p>
While libavg is open source, most of the development is sponsored by <a href="http://www.archimedes-solutions.de">Archimedes Solutions</a>. Archimedes has built whole exhibitions such as the <a href="http://www.expedition-zukunft.org/alias/Exhibition/994199">Science Express</a> based on the library. Performance - particularly video playback and animation performance - is one of our priorities. For instance, part of the video decoding happens on the graphics card using dedicated shaders when the hardware supports it - and falls back to a very fast sse2-based implementation when it doesn't.
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
