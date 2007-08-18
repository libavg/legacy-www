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
  <div id="content" width="100"><h1>Showcase</h1>
      
  

<h2 class="news">timescope</h2>
<p>
timescope is a tourist telescope with a twist: Viewers that look into it can use a button to choose whether to view the current happenings in front of the telescope or scenes from a different time. The images are superimposed so that the direction the user looks at is always correct, no matter in which direction the timescope is pointing: The real image fades into the virtual image and back without a change in perspective. It can be used in a wide variety of settings, for instance at tourist sites to enable visitors to look at the past of the sites or at building sites to show past use of the site and the future building. timescope uses libavg internally for the visualization, the interface to the internal camera and the other hardware components.</p>
<p>
timescope is a product development of the <a href="http://www.artcom.de">ART+COM AG</a>.</p>

<script language="JavaScript1.2">

//Drop-in slideshow- By Dynamic Drive
//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
//This credit MUST stay intact for use

var slideshow_width='350px' //SET SLIDESHOW WIDTH (set to largest image's width if multiple dimensions exist)
var slideshow_height='263px' //SET SLIDESHOW HEIGHT (set to largest image's height if multiple dimensions exist)
var pause=3000 //SET PAUSE BETWEEN SLIDE (3000=3 seconds)

var dropimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
dropimages[0]="images/timescope/timescope1.jpg"
dropimages[1]="images/timescope/timescope2.jpg"
dropimages[2]="images/timescope/timescope3.jpg"
dropimages[3]="images/timescope/timescope4.jpg"
dropimages[4]="images/timescope/timescope5.jpg"
dropimages[5]="images/timescope/timescope6.jpg"
dropimages[6]="images/timescope/timescope7.jpg"
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
