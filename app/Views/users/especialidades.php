<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Página de Especialidades Médicas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 80%;
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      margin-top: 100px;
    }
    .header {
      background-color: #007bff;
      color: #ffffff;
      padding: 20px;
      text-align: center;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .specialty-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }
    .specialty-button {
      padding: 10px 20px;
      margin: 10px;
      background-color: #007bff;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .specialty-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="header">
      <br><br><br><br>
    <h1>Bienvenido al módulo de agendamiento</h1>
    <br><br>
  </div>
  <div class="container">
    <h3 class="text-center">Elige la especialidad que deseas agendar</h3>
    <div class="specialty-buttons">
      <a type="button" href="general" class="specialty-button">General</a>
      <button class="specialty-button">Pediatría</button>
      <button class="specialty-button">Ginecología</button>
      <button class="specialty-button">Dermatología</button>
      <button class="specialty-button">Oftalmología</button>
    </div>
     
  </div>
    <br><br><br><br><br>
</body>
</html>