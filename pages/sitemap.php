<?php include("../database.php"); ?>
<?php include("../elements/header.php") ?>


<h1>Übersicht</h1>
<p class="lead">Übersicht des Blogs.</p>

<!--  PHP Datenbank Abfrage, Zugriff auf Datenbank durch Befehl SELECT.. -->
<!-- Zugriffsmethode hier ist PDO: https://www.php-einfach.de/mysql-tutorial/crashkurs-pdo/ -->

<?php
  $torte = tabelleAusgeben();
?>

<ul>
  <?php foreach ($torte as $banane) : ?>
    <li>
      <!-- Link für Listeneintrag anklickbar und Ausgabe von Titel in URL -->
      <a href="post.php?title=<?php echo $banane["title"]; ?>">
        <?php echo "{$banane["title"]}"; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>



<?php include("../elements/footer.php") ?>