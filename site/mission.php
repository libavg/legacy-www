<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
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
  <div id="content" width="100"><h1>Mission</h1>
<p> 
When artists and designers build computer-based installations, they often need to rely on a framework for managing high-quality interactive visuals and sound. In the past, most such installations were built using Macromedia Director (or possibly Flash) and ran under Microsoft Windows or Mac OS. avg is an open source alternative to these systems Ð a free plattform for multimedia installations that has some distinct advantages when compared to the proprietary solutions.</p>
<p> 

The avg project started in 2003, when we were trying to build an installation in the <a href="http://www.c-base.org">c-base</a> and got fed up with the apparent impossibility of doing what we wanted legally without paying for software. </p>


<h2 class="news">Requirements</h2>
<p>
At the start of the project, something that could be termed requirements gathering took place: I sat in bars late at night listening to people who build installations telling me how they work and what they&acute;d like to be able to do. I combined this with my own experiences in building installations and came up with the following list of needed features:
<ul>
 <li><i>High-quality visuals:</i> The system would need good performance (better than current solutions), high-resolution video playback, good font rendering and layout support, seamless integration of different media, easy and flexible authoring of effects.</li>
 <li><i>High-quality sound:</i> Low-latency sound playback would be essential, as would mixing of several sounds. Support for multi-channel playback to account for installations with lots of speakers would be nice.</li>
 <li><i>Quick authoring:</i> Artists and designers would need an easy and flexible method of specifying the intended results. Short time intervals between authoring changes and seeing the results would be essential.</li>
 <li><i>Support for a broad range of systems:</i> Linux PCs and Macs would need to be supported. Linux is ideal for media installations, not only because it is open source, but also because it has very good support for the sort of &acute;embedded&acute; systems that installations use and is easy to work with when the computer is only accessible over a network. Macs are ideal for authoring, because all the other tools the designer needs to build installations are available on this plattform.<br>
In addition to state-of-the-art computers, legacy systems should be supported so low-budget projects can use it.</li>
 <li><i>Openness for expansion:</i> This cannot be stressed enough. The potential users of the plattform would be free-minded, intelligent people who don&acute;t like to be fenced in. An open source plattform helps a lot here, the intention being that missing features can be added by those people that need them.</li>
</ul>


<h2 class="news">Alternatives: Director, Flash, svg players</h2>
<p>Of course, if the commercial products did everything authors want, it would be hard to convince most people to use an open-source counterpart.</p>
<p class="bold">They don&acute;t.</p>
<p> 

Director still has a slow rendering engine that does all computation in software. Font quality is mediocre, so designers regularly pre-render text in image processing programs and import the images in Director. (Needless to say, that results in lots of extra work if the text needs to be changed during production). There is no linux player.</p>
<p> 

Flash focuses on internet delivery. It is optimized for small downloads, thus the good support for vector graphics. It is not made to handle complex bitmapped graphics and videos, causing performance problems. Like in director, all rendering is done in software and there is no up-to-date playback engine for Linux.</p>
<p> 

The open svg (Scalable Vector Graphics) standard is an attempt to build an open standard alternative to flash. While interesting, the standard does not support video. It is also a large standard that is hard to implement completely.</p>
<p> 


<h2 class="news">Concept</h2>
<p>

Central to the avg plattform is an xml-based screen layout language named - you guessed it - avg. This language is simliar to svg, with lots of vector-oriented features missing and things like video support added. Dynamic, reactive or interactive elements are scripted in python. The result is that there&acute;s a clear separation between static content (screen layout) and dynamics (animations, user interaction). This makes it easy for content and dynamics to be handled by different people if necessary or convenient. </p>
<p> 

As an example, here is an avg file that displays a bitmap on the screen:<br>
<pre>
&lt;avg id="mainavgnode" width="640" height="480" fullscreen="true"&gt;
 &lt;image id="logo" x="0" y="0" z="1" href="avglogo.tif" 
        onmouseover="disappear"/&gt;
&lt;/avg&gt;
</pre>
<p>And this is a python snippet that gets called when the user moves the mouse over the bitmap and makes it disappear:<br>
<pre>
def disappear():
    logoNode = AVGPlayer.getElementByID("logo")
    logoNode.opacity = 0
</pre>
</p>
<p>A full list of the things that libavg currently supports can be found on the features page.</p>
<p class="noindent">Ulrich von Zadow <span class="date">April 2006</span></p>
</div>
  
</div>

</body>
</html>
