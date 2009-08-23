<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta name="author" content="Ulrich von Zadow">
    <meta name="keywords" content="python, multimedia, flash, director, adobe, exhibit, processing, opengl, installation">
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
<div id="content" width="100"><h1>Installing</h1>
    
<p>libavg currently runs on i386 systems running Linux or Mac OS X. There are packages for Ubuntu and Debian Linux as well as Mac OS X. For other systems, you'll have to download the source and compile by hand.

<h2 class="news">Mac OS X</h2>

<p>
<p>Download the installer from the download page and double-click on it.
<p>To see if everything is running correctly, open a terminal, cd to <tt>/Library/Python/2.5/site-packages/libavg/avg/test</tt> and call <tt>./Test.py</tt>. You should see some test graphics flicker on the screen. The last message in the terminal should read 'OK'.

<h2 class="news">Debian Linux</h2>

<p>libavg itself can be installed with apt-get install python-libavg. However, it needs ffmpeg, which will only be found if
<tt>deb http://www.debian-multimedia.org sid main</tt>
is added to <tt>/etc/apt/sources.list</tt> first.</p>

<h2 class="news">Ubuntu Linux</h2>

<p>libavg itself can be installed with apt-get install python-libavg. However, it needs ffmpeg, which will only be found if
<tt>deb http://packages.medibuntu.org/ hardy free non-free</tt>
is added to <tt>/etc/apt/sources.list</tt> first. (The exact url will vary according to the ubuntu release you're using.)</p>

<h2 class="news">Source install</h2>

<p>The <a href="https://www.libavg.de/wiki/index.php/Main_Page">libavg wiki</a> contains instructions on how to install the svn version from source.
<h2 class="news">Troubleshooting Linux Direct Rendering</h2>

<p>You can test if OpenGL is running accelerated by running <tt>glxinfo</tt>. If it sais "Direct Rendering: yes", everything is set. If not, you'll have to google for instructions involving your graphics card and your distribution.</p>
</p>

 <p>&nbsp;</p>

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
