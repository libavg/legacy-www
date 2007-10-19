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
    
<p>libavg currently runs on i386 and PPC systems running Linux or Mac OS X. There are packages for Gentoo and Debian Linux as well as Mac OS X. For other systems, you'll have to download the source and compile by hand.

<h2 class="news">Mac OS X</h2>

<p>
<p>Download the installer for your architecture from the download page, unzip 
it and double-click on <tt>libavg.pkg</tt>.</p>
<p>After the installation, copy /Library/Python/2.3/site-packages/avg/avgrc to /etc. On Mac OS X 10.3, you need to have the environment variable PYTHONPATH set to /Library/Python/2.3/site-packages/. On 10.4, this happens automatically. To see if everything is running correctly, open a terminal, cd to <tt>/Library/Python/2.3/site-packages/libavg/avg/test</tt> and call <tt>./Test.py</tt>. You should see some test graphics flicker on the screen. The last message in the terminal should read 'OK'.

<h2 class="news">Gentoo</h2>


<p>Download <tt>libavg-x.y.z.ebuild</tt> from the download page, copy it to your portage overlay directory under <tt>media-libs/</tt> and execute emerge libavg as root. Information on setting up a portage overlay can be found here:<br>
<a href="http://gentoo-wiki.com/HOWTO_Installing_3rd_Party_Ebuilds">http://gentoo-wiki.com/ HOWTO_Installing_3rd_Party_Ebuilds</a></p>

<h2 class="news">Debian</h2>


<p>libavg itself can be installed with apt-get install python-libavg. However, it needs ffmpeg, which will only be found if
<tt>deb http://www.debian-multimedia.org sid main</tt>
is added to <tt>/etc/apt/sources.list</tt> first.</p>

<h2 class="news">Source install</h2>

<p><i>Note:</i> Additional notes on installing libavg from source for specific operating systems are in the wiki.

<p>
libavg uses a lot of third-party libraries. What follows is a list of packages you'll need. The package names are the names of the gentoo packages needed. For other distributions, the list should enable you to find what's needed. In many cases, libavg checks during configure that these libraries are installed, so you'll probably get configure failures if they aren't.</p>
<ul>
 <li>imagemagick (Tested with 6.2.2.3)</li>
 <li>ffmpeg 0.4.9pre1 or later. 0.4.8 doesn't work. Actually, ffmpeg isn't needed directly, but it's base libraries libavcodec, libavformat and libavutil are. Debian users need to add 'deb http://www.debian-multimedia.org sid main' to '/etc/apt/sources.list' to get this package.</li>
 <li>libsdl. Tested with 1.2.5 and 1.2.8 (only needed for OpenGL and non-fullscreen DirectFB support).</li>
 <li>Working OpenGL in some form or other or</li>
 <li>Optional: DirectFB (Tested with 0.9.22, 0.9.19 and up should work.)</li>
 <li>libxml2 (Tested with 2.6.19.)</li>
 <li>libfreetype (Tested with 2.1.9)</li>
 <li>pango (Tested with 1.8.1)</li>
 <li>Optional: libdc1394 for Firewire digital camera support. (Tested with 0.9.3 and 1.1.0)</li>
 <li>python 2.3.x or newer.</li>
 <li>boost-python (Tested with 1.31.0 and 1.33.0)</li>
</ul>

<p> Debian users can use the depends line in the debian package and do an appropriate apt-get install:
<p>
libavcodeccvs51-dev | libavcodeccvs-dev | libavcodec2-dev, libboost-python-dev, libdc1394-13-dev, libfaac-dev, libfaad2-dev, liblame-dev, liblzo-dev, libmagick++9-dev | libmagick++6-dev, libpango1.0-dev, libsdl1.2-dev, libx264-dev, libxml2-dev, libxvidcore4-dev, libxxf86vm-dev
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
