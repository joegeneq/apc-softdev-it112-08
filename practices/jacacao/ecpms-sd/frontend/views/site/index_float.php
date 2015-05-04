<script language="javascript" src="float/js/jquery_mini.js"></script>
<script language="javascript" src="float/js/jquery.dimensions.js"></script>
<script language="javascript">
	var name = "#floatMenu";
	var menuYloc = null;
	
		$(document).ready(function(){
			menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
			$(window).scroll(function () { 
				offset = menuYloc+$(document).scrollTop()+"px";
				$(name).animate({top:offset},{duration:500,queue:false});
			});
		}); 
	 </script>

<link href="float/css/reset.css" rel="stylesheet" type="text/css" />
<link href="float/css/page.css" rel="stylesheet" type="text/css" />
<link href="float/css/other.css" rel="stylesheet" type="text/css" />

<div id="page-wrap">
<div id="header">
	<h2>Floating menu</h2>
    <h1>jQuery&CSS</h1>
</div>
<div id="content">
<h1>Live Demo</h1>
<p class="first">The page is longer than it would really need to be to allow you to notice how the menu behave when it crosses content or graphics.</p>
<p>Nulla imperdiet, enim non pellentesque imperdiet, nisl lacus condimentum metus, et gravida erat nisl ac nulla. Aliquam semper eleifend massa. Maecenas et eros. Donec nibh sem, laoreet et, consequat vel, vestibulum sit amet, orci. Curabitur semper bibendum neque. Suspendisse potenti. Cras lacinia diam in orci. Nullam orci lacus, placerat et, gravida at, iaculis sit amet, augue. Morbi faucibus. Morbi bibendum. Donec massa. Vivamus ut purus. Nunc nec urna nec diam rutrum lacinia. Ut eu nunc non enim consectetuer hendrerit. Nullam suscipit molestie enim. Proin et felis. Praesent vestibulum interdum est.</p>
<p>In pulvinar. Aenean at mauris. Maecenas volutpat, leo elementum ultrices laoreet, augue purus euismod arcu, vitae tempor urna lectus vitae nisi. Nam aliquet, pede ac fermentum aliquam, libero mauris elementum tellus, a malesuada arcu diam a eros. Aenean ligula. Nunc pharetra. Donec ultrices ultricies quam. Sed fringilla, mi nec gravida rutrum, tortor erat volutpat odio, pharetra egestas neque purus a est. Sed lobortis purus. Nunc in diam in velit consectetuer pellentesque. Nullam facilisis semper augue. Sed ullamcorper magna nec massa. Sed blandit commodo magna. Sed purus dui, cursus nec, interdum at, ullamcorper at, felis. Etiam tempor porta eros.</p>
<p class="longer">Donec tempor, ante ac iaculis euismod, enim enim vulputate magna, sed vulputate turpis enim vitae mi. Nam elementum rutrum augue. Sed pretium, urna sit amet dictum scelerisque, lectus nunc euismod dui, vitae molestie magna ante ornare augue. Vestibulum non augue dignissim nisl vestibulum adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi ultrices leo ultricies nisi. Duis sed nibh. Phasellus in metus a nibh lobortis interdum. In nisi eros, cursus quis, tempor et, pellentesque ut, erat. Vivamus scelerisque nisl eget lectus. Nunc a mi. Nullam ut felis. Nunc convallis, lacus eget facilisis condimentum, ante justo viverra sapien, ac rutrum felis metus in nibh. Fusce bibendum. Curabitur euismod, leo quis blandit feugiat, risus enim tempus elit, eget ultricies odio nisi id purus. Aliquam dapibus hendrerit arcu. Praesent bibendum, turpis sit amet viverra luctus, nulla magna imperdiet leo, et accumsan eros elit eu lacus.</p>
<p>Maecenas facilisis congue libero. Maecenas ac risus. Donec sagittis sodales enim. Nam accumsan feugiat augue. Donec orci elit, elementum vitae, condimentum ut, iaculis a, magna. Vivamus at mauris et augue iaculis auctor. Suspendisse in ligula. Aenean malesuada, eros et porttitor eleifend, lacus nunc feugiat mauris, eu tristique leo mauris at velit. Nulla vulputate purus at dui. Ut porta accumsan mauris. Curabitur sed dolor non augue cursus consectetuer. Fusce felis. Nulla consequat, justo non pretium congue, urna sapien faucibus tortor, tristique faucibus mi metus imperdiet dui. Curabitur venenatis scelerisque purus. Curabitur nisi. Nam vehicula odio in leo convallis tristique. Vestibulum quis massa vel lacus laoreet egestas. Etiam nisi. Aenean non lacus. </p>
<div id="footer"><p>Thanks for your time and i hope you enjoyed this | <a href="mailto:jeff.dion@gmail.com">Contact the author</a></p></div>
</div>
</div>

<div id="floatMenu">
  <ul class="menu1">
    <li><a href="#" onclick="return false;"> Home </a></li>
  </ul>
  <ul class="menu2">
    <li><a href="#" onclick="return false;"> Table of content </a></li>
    <li><a href="#" onclick="return false;"> Exam </a></li>
    <li><a href="#" onclick="return false;"> Wiki </a></li>
  </ul>
  <ul class="menu3">
    <li><a href="#" onclick="return false;"> Technical support </a></li>
  </ul>
</div>
