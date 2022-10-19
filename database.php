<?php
# Auslagerung der Datenbankverbindung auf database.php, um diesen Code nicht jedesmal vom Neuen einzugeben
# In den anderen Seiten wird ganz oben ein php Verweis drangehängt, um mit dieser Datei zu verknüpfen: 
# <?php include("../database.php") 
#Abfragecode Methode in PDO:   


$pdo = new PDO(
 'mysql:host=localhost;dbname=blog;charset=utf8',
 'blog',
  'L1KuRJCaz@[71Lf6'
  );
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 
 #Keine gute Möglichkeit für die Ausgabe von der Tabelle 
#$tables = [
#  'posts' => 'posts'
#];
?> 
