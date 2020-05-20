<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Code/css/winkel.css">
    <link rel="stylesheet" href="../Code/css/Style.css">
    <link rel="stylesheet" href="../Code/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gitaren</title>
</head>
<body>
  
<?php
include 'navbar.php';
?>

<div class= "products">
  <div class="card">
    <img src="Foto's/gitaar1.jpg" alt="Gitaar 1" style="width:70%">
    <h1>Gitaar</h1>
    <p class="price">€499,99</p>
    <p><button>Add to Cart</button></p>
  </div>


    <div class="card">
      <img src="Foto's/gitaar1.jpg" alt="Gitaar 2" style="width:70%">
      <h1>Gitaar</h1>
      <p class="price">€499,99</p>
      <p><button>Add to Cart</button></p>
    </div>

    <div class="card">
      <img src="Foto's/gitaar1.jpg" alt="Gitaar 3" style="width:70%">
      <h1>Gitaar</h1>
      <p class="price">€499,99</p>
      <p><button>Add to Cart</button></p>
    </div>

    <div class="card">
      <img src="Foto's/gitaar1.jpg" alt="DGitaar 4" style="width:70%">
      <h1>Gitaar</h1>
      <p class="price">€499,99</p>
      <p><button>Add to Cart</button></p>
    </div>
    </div>
      <footer>
        <p>Footer</p>
      </footer>
</body>
</html>