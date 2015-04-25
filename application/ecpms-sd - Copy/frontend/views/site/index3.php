<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<br><br><br><br><br><br><br><br><br><br>

<div id="main">

  <h1>Colorful Content Accordion, CSS &amp; jQuery</h1>
  
  <h2>View the <a href="http://tutorialzine.com/2009/12/colorful-content-accordion-css-jquery/">original tutorial &raquo;</a></h2>

  <ul class="container">
      <li class="menu">
      
          <ul>
            <li class="button"><a href="#" class="green">Kiwis <span></span></a></li>

            <li class="dropdown">
                <ul>
                    <li><a href="#" onclick="$('.button a').eq(2).click();return false;">Open Grapes Section</a></li>
                    <li><a href="#" onclick="$('.dropdown').slideUp('slow');return false;">Close This Section</a></li>
                    <li><a href="http://en.wikipedia.org/wiki/Kiwifruit">Read on Wikipedia</a></li>
                    <li><a href="http://www.flickr.com/search/?w=all&amp;q=kiwi&amp;m=text">Flickr Stream</a></li>
                </ul>
            </li>

          </ul>
          
      </li>
      
      <li class="menu">
      
          <ul>
            <li class="button"><a href="#" class="orange">Oranges <span></span></a></li>            

            <li class="dropdown">
                <ul>
                    <li><a href="#" onclick="$('.button a:last').click();return false;">Open Last Section</a></li>
                    <li><a href="http://en.wikipedia.org/wiki/Orange_%28fruit%29">Wikipedia Page</a></li>
                    <li><a href="http://www.flickr.com/search/?w=all&amp;q=oranges&amp;m=text">Flickr Photos</a></li>
                </ul>
            </li>

          </ul>
          
      </li>

      
      <li class="menu">
      
          <ul>
            <li class="button"><a href="#" class="blue">Grapes <span></span></a></li>

            <li class="dropdown">
                <ul>
                    <li><a href="http://en.wikipedia.org/wiki/Grapes">Wiki page</a></li>
                    <li>Text label 1</li>
                    <li>Text label 2</li>
                    <li><a href="http://www.flickr.com/search/?w=all&amp;q=grapes&amp;m=text">Flickr Stream</a></li>
                </ul>
            </li>

          </ul>
          
      </li>

    
      <li class="menu">
      
          <ul>
            <li class="button"><a href="#" class="red">Strawberries <span></span></a></li>

            <li class="dropdown">
                <ul>
                    <li><a href="http://en.wikipedia.org/wiki/Strawberry">Wiki page</a></li>
                    <li><a href="http://www.flickr.com/photos/mojeecat/368540120/">Strawberry Pie</a></li>
                    <li><a href="http://www.flickr.com/search/?w=all&amp;q=strawberries&amp;m=text">Photo Stream</a></li>
                </ul>
            </li>

          </ul>
          
      </li>
  </ul>

<div class="clear"></div>

</div>
</body>