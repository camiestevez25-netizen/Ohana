<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=" boostrap/bootstrap.min.css"rel="stylesheet" >
</head>
<body>
  <?php
   require "php/cabecera.php"; 
    ?>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/clasificacion-de-lapices-grafitos.jpg" class="card-img-top" alt="" height="285mp">
      <div class="card-body">
        <h5 class="card-title">Lapices de Grafito</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <button type="button" class="btn btn-primary" href="producto/pagprin.php"> Productos </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/papeleria.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Papeleria</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <button type="button" class="btn btn-primary" href="producto/pagprin.php"> Productos </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/resaltadores.jpg" class="card-img-top" alt="90mp" height="310mp">
      <div class="card-body">
        <h5 class="card-title">Resaltadores </h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      <button type="button" class="btn btn-primary" href="producto/pagprin.php"> Productos </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>



     <script src="boostrap/bootstrap.bundle.min.js"></script> 
</body>
</html>