<!DOCTYPE html>
<html>
<head>
    <title>Página Profesional</title>
    <style>
        body {
            background-color: #F2F2F2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2980B9;
        }

        p {
            color: #000000;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #000000;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #2980B9;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1A5276;
        }
    </style>
</head>
<body>
    <br><br><br>
<center><h2>Informacion de la cita</h2></center>
    <div class="container">
        <h2>Especialista <?= esc($news['title']) ?></h2>
        <p>Cita para <?= esc($news['body']) ?></p>
        <p>Para el dia <?= esc($news['Fecha_cita']) ?></p>

        <form action="" method="POST">
            <label>Ingrese su número de identificación</label>
            <input type="text" name="identificacion" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
