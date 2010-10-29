<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta name="author" content="Ulrich von Zadow">
    <meta name="keywords" content="python, multimedia, flash, director, adobe, exhibit, processing, opengl">
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
  
  <div id="content" width="100"><h1>About</h1>
    <p>libavg is a high-level development platform for media-centric applications. It uses an xml-based layout language for screen design and python as scripting language. libavg allows developers and media artists/designers to quickly develop media applications. It has been under constant development since the project's inception in 2003. Since 2007, development is sponsored by <a href="http://www.archimedes-solutions.de">Archimedes Solutions GmbH</a>, which uses libavg for it's exhibits.
    <p>libavg runs on Linux, Mac OS X and Windows. It is open source and licensed under the LGPL. For details, click on License in the menu.</p>
    <h1>News</h1>
    <h2 class="news">Version 1.0.1 Released <span class="date">February 9, 2010</span></h2>
    <p>Version 1.0.1 is ready for download. It's a bugfix release and solves some Intel graphics card issues as well as a few other bugs. For details, see the  <a href="https://www.libavg.de/websvn/filedetails.php?repname=libavg&path=%2Fbranches%2Frelease1.0%2FNEWS">NEWS file</a>
    <h2 class="news">Version 1.0 Released <span class="date">January 8, 2010</span></h2>
    <p>After a long testing phase, we have released version 1.0 of libavg. We did a lot of work on the stability of the library, and the new version has been tested on Leopard, Snow Leopard, Ubuntu 8.10, 9.04 and 9.10, as well as Windows XP and Vista. Under Linux, we have had it running using NVidia, Intel and ATI graphics. New features include a new mesh node, sse2-based video acceleration and a very helpful script that dumps the format of a video.
    <h2 class="news">Continuous build infrastructure <span class="date">December 8, 2009</span></h2>
    <p>A buildbot master, which presently handles two build slaves, has been added as a featured improvement of libavg's test cycle. It can be accessed via the link <a href="http://www.libavg.de:8010">Buildbot</a>, visible on the navigation column. The two slaves are physical machines which are able to run unit tests natively: an Ubuntu 9.04 box and a Windows 2003 R2 setup, both for ia32 arch. Thanks to <a href="http://www.archimedes-solutions.de">Archimedes Solutions GmbH</a> which kindly sponsors the initiative.</p>

    <h2 class="news">Release 0.9.0 <span class="date">August 23, 2009</span></h2>
    <p>We've released a new version of libavg. It features vector support, support for plugins and a powerful new animation framework. For the details, see the <a href="https://www.libavg.de/websvn/filedetails.php?repname=libavg&path=%2Ftrunk%2Flibavg%2FNEWS">NEWS</a> file.
    <h2 class="news">German Computer Game Prize for libavg-Based Game <span class="date">April 8, 2009</span></h2>
    <p>Students of the HTW Berlin won the German Computer Game Prize in the category 'Best Student Concept' with a multiplayer/multitouch game developed using libavg. More infos on the official site (<a href="http://www.deutschercomputerspielpreis.de/59.0.html">http://www.deutschercomputerspielpreis.de/59.0.html"</a>) and on the project website (<a href="http://mtc.berlingrooves.de/spiel.html">http://mtc.berlingrooves.de/spiel.html</a>).
    <h2 class="news">libavg Developer Position Open <span class="date">October 7, 2008</span></h2>
    <p>As many of you know, libavg development is sponsored by Archimedes Solutions GmbH. We currently have a job opening for a smart software developer in Berlin. If you're interested in developing exhibits that millions of people will see, have a look at the full job description: <a href="http://archimedes-solutions.de/en/jobs.html">http://archimedes-solutions.de/en/jobs.html</a>.
    <h2 class="news">Release 0.8.0 <span class="date">September 22, 2008</span></h2>
    <p>After lots of work, there's a new release on the download page. It includes sound support, a much improved words node, and a multitude of other api and performance improvements. As always, see the NEWS file in the distribution for details.
    <h2 class="news">Awards for libavg-based installation <span class="date">June 20, 2008</span></h2>
    <p>The libavg-based Jurascopes in the Berlin Natural History Museum won a multitude of prestigious awards in the past months. Silver from the german Art Director's Club (ADC), gold from ADC Global, bronze from the british D&amp;AD, two iF communication design awards and the German Multimedia Award - wow. More on the Jurascopes <a href="http://www.artcom.de/index.php?option=com_acprojects&page=6&id=59&Itemid=115&details=0&lang=en">here</a>.
    <h2 class="news">libavg at the transmediale 2008 <span class="date">January 25, 2008</span></h2>
    <p>We're using libavg as a motion tracking library for The Special Player - dancers are enhanced with digital auras in a multidisciplinary project involving musicians, computers, visual artists, cameras, dancers, projectors and more. If you're in Berlin, come to the c-base, Jan 31-Feb 3. More info on the <a href="http://www.02l.net/special/transmediale/the_special_player">project website</a>.
    <h2 class="news">MTC Construction HowTo <span class="date">October 14, 2007</span></h2>
    <p>People are asking us how to build their own multitouch device, so we wrote up some <a href="https://www.libavg.de/wiki/index.php/Building_a_MultiTouch_Console">instructions</a>.
    <h2 class="news">Version 0.7.0 Available <span class="date">August 31, 2007</span></h2>
    <p>A long time span between libavg releases doesn't mean we haven't been busy. Lots of work went into constructing our MultiTouch Console MTC (<a href="http://www.multitouch.de">http://www.multitouch.de</a>), so that libavg now has complete support for multitouch input devices and generally supports camera tracking. Other than that, libavg's video decoder is now multithreaded, resulting in even better performance - especially on multicore processors. The documentation has improved: there are several new tutorials, and the reference is much more thorough. As always, a lot else has happened as well. For the gory details, see the NEWS file in the distribution.
    <h2 class="news">Version 0.6.0 Available <span class="date">October 25, 2006</span></h2>
    <p>libavg 0.6.0 adds support for dynamically adding nodes to and removing nodes from an active avg tree, thus making the library a lot more flexible. Lots of other minor things have been improved - see the NEWS file in the distribution.
    <h2 class="news">Version 0.5.9 Available <span class="date">August 11, 2006</span></h2>
    <p>The new version includes Intel Mac support, support for videos with alpha channels, much improved automatic tests and thus (hopefully) better stability, Mac vertical blanking support, support for multisampling, gamma correction and lots of minor bugfixes.
    <h2 class="news">Complete Website Overhaul <span class="date">May 10, 2006</span></h2>
    <p>Behold what Macro of <a href="http://www.macrone.de">http://www.macrone.de</a> has done: A complete redesign of the website. There's lots of new content as well.
    <h2 class="news">First Mac OS X Version Released
    <span class="date">May 8, 2006</span></h2>
    <p>A Mac installer is now available on the downloads page. It contains a pkg that installs libavg on your harddisk with a doubleclick. No further configuration should initially be necessary - just add import avg to your python scripts. The Mac version uses the ttf fonts installed in the standard mac font directories and uses Mac OpenGL extensions for video acceleration. At the moment, it has beta status, so don't expect everything to work yet. It's been tested on PowerPCs running Tiger. Intel Macs aren't supported yet.</p>
  </div>
  
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2440175-1";
urchinTracker();
</script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2440175-1";
urchinTracker();
</script>
</body>
</html>
