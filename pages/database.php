<?php
# Auslagerung der Datenbankverbindung auf database.php, um diesen Code nicht jedesmal vom Neuen einzugeben
# In den anderen Seiten wird ganz oben ein php Verweis drangehängt, um mit dieser Datei zu verknüpfen: 
# <?php include("../database.php") 

$pdo = new PDO(
  'mysql:host=localhost;dbname=blog',
  'root',
  ''
);


function fetch_posts(){
  
}

#$tables = [
#  'posts' => 'posts'
#];

?>