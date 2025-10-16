<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Clientes - Ohana</title>

  <!-- Bootstrap 5 -->
  <link href="boostrap/bootstrap.min.css" rel="stylesheet">

  <!-- Íconos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      padding: 2rem;
    }
    .table-container {
      background: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h1 {
      margin-bottom: 1.5rem;
      font-weight: 600;
      color: #343a40;
    }
  </style>
</head>
<body>

<?php
  require "php/cabecera.php"; 
?>

<div class="container">
  <div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>Lista de Clientes</h1>
      <a href="#" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Agregar
      </a>
    </div>

    <?php
    $url = "https://api.spacexdata.com/v3/launches";
    $response = file_get_contents($url);
    $productos = json_decode($response, true);

    if (is_array($productos)) {
        echo "<table class='table table-hover table-bordered align-middle'>
                <thead class='table-dark'>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col' class='text-center'>Acciones</th>
                  </tr>
                </thead>
                <tbody>";
        
        foreach ($productos as $p) {
            echo "<tr>
                    <td>" . htmlspecialchars($p['flight_number']) . "</td>
                    <td>" . htmlspecialchars($p['mission_name']) . "</td>
                    <td class='text-center'>
                      <a href='#' class='btn btn-warning btn-sm me-2'>
                        <i class='bi bi-pencil-square'></i> Modificar
                      </a>
                      <a href='#' class='btn btn-danger btn-sm'>
                        <i class='bi bi-trash'></i> Eliminar
                      </a>
                    </td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-danger'>No se pudo leer el endpoint de productos.</div>";
    }
    ?>
  </div>
</div>

<script src="boostrap/bootstrap.bundle.min.js"></script> 
</body>
</html>
