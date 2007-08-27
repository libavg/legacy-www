<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<meta name="author" content="Ulrich von Zadow">
    <meta name="keywords" content="python, multimedia, flash, director, adobe, exhibit, processing, opengl, example">
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
  <div id="content" width="100"><h1>Showcase</h1>
      
  
<h2 class="news">Photobox Werder Bremen Museum</h2>
<p>

The Photobox in the Werder Bremen Museum allows visitors to take photographs of themselves and merge them with images of the soccer club's stars. The user can choose between several star photos to be composited into using greenscreen technology. Several photos are taken, and the user selects the best one to be printed immediately on a connected printer. Even the lighting of the original photo is re-enacted by computer-controlled lights in the booth the Photobox is in.</p>
<p>
Besides some custom image processing and printer interface code, the Photobox was built using libavg. It uses a 1024x768 firewire camera for the photos and interfaces to a coin rejector and the lights using a serial velleman board.
</p>
<p>
The Photobox was built by the <a href="http://www.marplon4.de">marplon4 GbR</a>.</p>

<script language="JavaScript1.2">

//Drop-in slideshow- By Dynamic Drive
//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
//This credit MUST stay intact for use

var slideshow_width='350px' //SET SLIDESHOW WIDTH (set to largest image's width if multiple dimensions exist)
var slideshow_height='294px' //SET SLIDESHOW HEIGHT (set to largest image's height if multiple dimensions exist)
var pause=3000 //SET PAUSE BETWEEN SLIDE (3000=3 seconds)

var dropimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
dropimages[0]="images/showcase/photobox1.jpg"
dropimages[1]="images/showcase/photobox2.jpg"
dropimages[2]="images/showcase/photobox3.jpg"
dropimages[3]="images/showcase/photobox4.jpg"
dropimages[4]="images/showcase/photobox5.jpg"
dropimages[5]="images/showcase/photobox6.jpg"
dropimages[6]="images/showcase/photobox7.jpg"
////NO need to edit beyond here/////////////

var preloadedimages=new Array()
for (p=0;p<dropimages.length;p++){
preloadedimages[p]=new Image()
preloadedimages[p].src=dropimages[p]
}

var ie4=document.all
var dom=document.getElementById

if (ie4||dom)
document.write('<div style="position:relative;width:'+slideshow_width+';height:'+slideshow_height+';overflow:hidden"><div id="canvas0" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';top:-'+slideshow_height+'"></div><div id="canvas1" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';top:-'+slideshow_height+'"></div></div>')
else
document.write('<img name="defaultslide" src="'+dropimages[0]+'">')

var curpos=parseInt(slideshow_height)*(-1)
var degree=10
var curcanvas="canvas0"
var curimageindex=0
var nextimageindex=1


function movepic(){
if (curpos<0){
curpos=Math.min(curpos+degree,0)
tempobj.style.top=curpos+"px"
}
else{
clearInterval(dropslide)
nextcanvas=(curcanvas=="canvas0")? "canvas0" : "canvas1"
tempobj=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
tempobj.innerHTML='<img src="'+dropimages[nextimageindex]+'">'
nextimageindex=(nextimageindex<dropimages.length-1)? nextimageindex+1 : 0
setTimeout("rotateimage()",pause)
}
}

function rotateimage(){
if (ie4||dom){
resetit(curcanvas)
var crossobj=tempobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.style.zIndex++
var temp='setInterval("movepic()",50)'
dropslide=eval(temp)
curcanvas=(curcanvas=="canvas0")? "canvas1" : "canvas0"
}
else
document.images.defaultslide.src=dropimages[curimageindex]
curimageindex=(curimageindex<dropimages.length-1)? curimageindex+1 : 0
}

function resetit(what){
curpos=parseInt(slideshow_height)*(-1)
var crossobj=ie4? eval("document.all."+what) : document.getElementById(what)
crossobj.style.top=curpos+"px"
}

function startit(){
var crossobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.innerHTML='<img src="'+dropimages[curimageindex]+'">'
rotateimage()
}

if (ie4||dom)
window.onload=startit
else
setInterval("rotateimage()",pause)

</script>


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
