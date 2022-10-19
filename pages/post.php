<?php include("../database.php"); ?>
<?php include("elements/header.php"); ?>


<h1>Post.php</h1>

<?php            
  $id = $_GET['id'];
  $post = tabelleAusgeben2($id);
  #var_dump($post);
?>


<div>

<h3><?php echo $post["title"]; ?></h3>
<!-- Damit die Einträge in Datenbank auch leerzeilen beinhalten: --> 
<h4><?php echo str_replace("\n", "<br />" ,$post["content"]); ?></h4>
</div>

<!-- Alle Zeichen, die oben in der URL auftauchen/übergeben wurwden, kann man mit $_GET zugreifen und mit var dump anzeigen lassen -->
<!-- Und woher kommt titel in die URL? Siehe Zeile 21: <a href="post.php?title=..php echo $banane["title"];.."> index.php -->
<!-- <p><#?php var_dump($_GET); ?></p> -->

<!-- Der Titel der Seite, zB. http://localhost/phpblog/pages/post.php?title=Hallo%20Welt456 wird als Var_Dump ausgegeben -->
<?php include("elements/footer.php"); ?>