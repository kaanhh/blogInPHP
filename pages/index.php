<!-- Verknüpfung mit database.php (Verbindung zur Datenbank mit PDO) -->
<!-- ../ bedeutet eine Ebene im Verzeichnis höher gehen, um die Datei zu finden -->
<?php include("../database.php"); ?>
<?php include("elements/header.php"); ?>


<h1>Startseite Seite</h1>

<?php
  $postsRepository = new App\Post\PostsRepository();
  #Die Funktion aus database.php wird ausgeführt. Diese Funktion beinhaltet ein MySQL Befehl zum holen der Daten aus der Datenbank
  $torte = $postsRepository->tabelleAusgeben();
?>

<ul>
  <?php
  #FOREACH gibt die Liste mit den Titeln aus der Datenbank aus
  # $torte greift über die Funktion tabelleAusgeben() und pdo auf die Datenbank zu und speicher je 1 Wert von Tabelle "posts" in $torte
  # die foreach Schleife speichert für jeden Wert aus der Datenbank den Wert in die Variable $banane hinein
  foreach ($torte as $banane) : ?>
    <li>
      <!--VORHER <a href="post.php?title=?php echo $banane["title"];?>"> -->
      <!-- NACHER: statt TITEL wird nun ID im URL -->
      <a href="post.php?id=<?php echo $banane["id"];?>">
        <?php echo "{$banane["title"]}"; ?> 
      </a>  
    </li>
  <?php endforeach; ?>
</ul>



<?php include("elements/footer.php"); ?>


