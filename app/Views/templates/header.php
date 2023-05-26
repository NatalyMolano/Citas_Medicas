<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .navbar-brand {
      margin-right: auto;
      color: blue !important;
    }

    .nav-link {
      color: blue !important;
      transition: background-color 0.3s, color 0.3s;
    }

    .nav-link:hover {
      background-color: blue !important;
      color: white !important;
    }
  </style>
   <title><?= esc($title) ?></title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="#"><?= esc($title) ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/users/create">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users/citas">Acerca de nosotros </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users/login">Iniciar Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users/especialidades">Especialidad</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/news">Agendar</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Resto del contenido de la página -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>