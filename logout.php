<?php
session_start(); 
if(session_destroy()){ // Destroying All Sessions 
  header("Location: connexion.php"); // Redirecting To Home Page 
}
?>