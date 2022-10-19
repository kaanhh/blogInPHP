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

  #diese Funktion wird dann zb in index.php aufgerufen über: $torte = tabelleAusgeben();
  function tabelleAusgeben() {
    #in einer Funktion kann man nicht auf eine Variable ausserhalb zugreifen. Mit "global" verweist die $pdo auf die Variable oben, bzw returned sie
     global $pdo;
     return $pdo->query("SELECT * FROM `posts`");
  }
  
  #weitere Funktion, wie man eine bestimmte Post laden kann?
  function tabelleAusgeben2($id){
    global $pdo;
  
    #Paramter nach : soll den Wert rechts haben, also $title, das wäre dann der URL-Name der Seite
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id= :id");
    $stmt->execute(['id'=>$id]);

     /*
     Bei mehreren Parametern könnte man das so benutzen (Mehr Parameter = SQL Aufrufe)

      $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE title= ? OR xzy= ?");
      $stmt->execute([$title, $xyz]);
     */

    return $stmt->fetch();

    /* Suboptimal, da dieser Code Sicherheitslücken hervorruft
    $query = "SELECT * FROM `posts` WHERE title='{$title}'";
    $q = $pdo->query($query);
    
    return $q->fetch();*/
    
  }
 
 #Keine gute Möglichkeit für die Ausgabe von der Tabelle 
#$tables = [
#  'posts' => 'posts'
#];
?> 
