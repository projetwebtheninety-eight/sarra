
<?php
session_start();
if(isset($_SESSION['user']) and $_SESSION['user']=="wej"){
?>



<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Barre de recherche</title>
 </head>
 <body>
  <form action = "verifform.php" method = "get">
   <input type = "search" name = "terme">
   <input type = "submit" name = "s" value = "Rechercher">
  </form>
 </body>

 <?php
}
else{
    header("location: connexion.php"); 
}
?>
</html>