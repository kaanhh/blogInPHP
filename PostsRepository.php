<?php 
namespace App\Post;

class PostsRepository{

function tabelleAusgeben() {
    #in einer Funktion kann man nicht auf eine Variable ausserhalb zugreifen. Mit "global" verweist die $pdo auf die Variable oben, bzw returned sie
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`");
}

function tabelleAusgeben2($id){
    global $pdo;
  
    #Paramter nach : soll den Wert rechts haben, also $title, das wäre dann der URL-Name der Seite
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id= :id");
    $stmt->execute(['id'=>$id]);


    return $stmt->fetch();


  }
}
