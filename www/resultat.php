<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8" >
  <title>Les résultats de recherche</title>
 </head>
 <body>
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
   echo "<div><h2>".$terme_trouve['titre']."</h2><p> ".$terme_trouve['contenu']."</p>";
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>