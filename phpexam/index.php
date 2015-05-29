<?php

// Create the navigation bar here meeting the requirements listed in step 2
// Do NOT alter the original array on line 4, use it as is
  $continents = array('Europe', 'Africa', 'North America', 'Antarctica', 'Asia', 'South America', 'Oceania');
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View | PHP Travel Site</title>
  </head>
  <body>
    <header>
      <h1>PHP Travel Site</h1>
    </header>
      <nav><ul><li><a href="./?action=Home" title="Home info">Home</a></li>
              <li><a href="./?action=Africa" title="Africa info">Africa</a></li>
              <li><a href="./?action=Antarctica" title="Antarctica info">Antarctica</a></li>
              <li><a href="./?action=Asia" title="Asia info">Asia</a></li>
              <li><a href="./?action=Europe" title="Europe info">Europe</a></li>
              <li><a href="./?action=North America" title="North America info">North America</a></li>
              <li><a href="./?action=Oceania" title="Oceania info">Oceania</a></li>
              <li><a href="./?action=South America" title="South America info">South America</a></li></ul>
      <?php
        // The navigation bar (step 2) will display here in the browser
        // Do NOT alter this code block
      sort($continents);
      array_unshift($continents, "Home");
      foreach ($continents as $navbar ) {
      echo $navbar . ' ';
  } 
      	//echo $navbar;
      ?>
    </nav>
    <main>
      <?php
        // The content from the controller (step 3) will display here in the browser
        // Do NOT alter this code block
     Home("Location: http://morethanherself.com/?action=Home");	
      echo $content;
      ?>
    </main>
    <footer>

	</footer>
  </body>
</html>
