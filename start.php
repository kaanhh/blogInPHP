<?php

$products = [
  [
    'title' => 'Orange',
    'desc' => 'Eine Orange ist sehr gesund!'
  ],
  [
    'title' => 'Computer',
    'desc' => 'Damit kann man Programmieren lernen!'
  ],
]

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>
  
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
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
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <br />
    <br />
    <br />


  <div class="container">

    <div class="row">
      <div class="col">
       Column
      </div>
      <div class="col">
       Column
      </div>
      <div class="col">
        Column
      </div>
    </div>
  </div>


<?php
function autoload($className)
{
  if (file_exists("{$className}.php")) {
    require "{$className}.php";
  }
}
spl_autoload_register("autoload");




$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$res = "SELECT * FROM `posts`";
foreach ($pdo->query($res) AS $row) {
  var_dump($row);
}


/*$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$res = $pdo->query("SELECT * FROM `posts` ");
foreach($res AS $torte){
  var_dump($torte);
}
*/


?>

    

    <div class="container">
      <!-- <pre><?php var_dump($products); ?></pre> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
