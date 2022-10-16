<!-- Verknüpfung mit database.php (Verbindung zur Datenbank mit PDO) -->
<!-- ../ bedeutet eine Ebene im Verzeichnis höher gehen, um die Datei zu finden -->
<?php include("../database.php") ?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startseite</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <!-- Bootstrap Navigation -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">Navigationsmenü</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gästebuch</a>
        </li>
      </ul>
    </div>
          <a class="navbar-brand" href="index.php">Blog</a>
        </div>
    </nav>

    <br /><br />

    <div class="container">

      <h1>Startseite des Blogs</h1>
      <p class="lead">Das hier ist die Startseite des Blogs.</p>

      <?php 
      # Speicher den Zugriff auf Datenbankinhalte in die Variable $torte
      # PDO wird hier erläutert: https://www.php-einfach.de/mysql-tutorial/crashkurs-pdo/
      $torte = fetch_posts(); 
      ?>
       
      <ul>
        <?php
          # Für jeden Datenbankeintrag, in $Torte gespeicher, speichere sie als $banane 
          # Anstatt {} kann man : benutzen. Sieht sauberer aus, allerdings muss man die foreach mit "endforeach" beenden
          foreach ($torte AS $banane): ?>
           <li> 
           <?php echo "{$banane["title"]}"; ?>
          </li>
         <?php endforeach ?>
      </ul>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
