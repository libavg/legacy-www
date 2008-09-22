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
<p>Download the installer from the download page and double-click on <tt>libavg-mac-leopard-intel.0.8.0.dmg</tt>.</p>
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

<p><i>Note:</i> Additional notes on installing libavg from source for specific operating systems are in the wiki.

<p>
libavg uses a lot of third-party libraries. What follows is a list of packages you'll need. The package names are the names of the gentoo packages needed. For other distributions, the list should enable you to find what's needed. The version numbers are just guidelines. In most cases, libavg checks during configure that these libraries are installed, so you'll probably get configure failures if they aren't.</p>
<ul>
 <li>libjpeg, libtiff, zlib, libpng (any recent version).</li>
 <li>GraphicsMagick (1.1.10).</li>
 <li>A recent version of ffmpeg, including libavcodec, libavformat and libavutil.</li>
 <li>libsdl (1.2.13).</li>
 <li>gettext (0.14.6).</li>
 <li>glib (2.14.1)</li>
 <li>Working OpenGL in some form or other.</li>
 <li>libxml2 (2.6.19.)</li>
 <li>libfreetype (2.3.5)</li>
 <li>expat (2.0.0)</li>
 <li>fontconfig (2.5.0)</li>
 <li>pango (1.18.2)</li>
 <li>Optional: libdc1394 for Firewire digital camera support. (1.1.0 and 2.0.1)</li>
 <li>python 2.5 or newer.</li>
 <li>boost-python, boost-thread (1.34.0)</li>
</ul>

<p>Once these libraries are installed, you can get libavg-x.y.z.tar.gz from the download page, unpack it and call</p>
<pre>
  ./configure
  make
  make install
</pre>  
<p>If you do a cvs checkout instead of a download, you need to call ./bootstrap before calling configure. Running bootstrap requires a working autotools setup: autoconf, automake and libtool need to be installed. If you get bootstrap failures, chances are you're using different versions of these tools than we are: autoconf 2.59, automake 1.9.6, libtool 1.5.18.</p>

<h2 class="news">Troubleshooting Linux Direct Rendering</h2>

<p>You can test if OpenGL is running accelerated by running <tt>glxinfo</tt>. If it sais "Direct Rendering: yes", everything is set. If not, you'll have to google for instructions involving your graphics card and your distribution. libavg will run with unaccelerated OpenGL, but that's slow. Really slow.</p>
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
