<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<title>Registro de usuario</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("https://deducedata.solutions/wp-content/uploads/2021/09/unnamed.gif");
        margin: 0;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 50px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        margin-top: 20px;
    }

    label {

        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    textarea {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: none;

    }

    input[type="submit"] {
        background-color: blue;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <br><br><br>
    <div class="container">
        <br><br>
        <h3>Registro de Usuario</h3>

        <form action="/users/create" method="post">
            <?= csrf_field() ?>

            <label for="username">Ingrese su nombre completo</label>
            <input type="text" name="username" value="<?= set_value('username') ?>">
            <br>
            <label for="username">Ingrese su documento</label>
            <input type="text" name="documento" value="<?= set_value('documento') ?>">
            <br>

            <label for="sexo">Ingrese su genero</label>
            
            <input type="text" name="sexo" value="<?= set_value('sexo') ?>">
             <label for="EPS">Ingrese su EPS</label>
            <input type="text" name="EPS" value="<?= set_value('EPS') ?>">
            <br>
            
            
             <label for="email">Email</label>
            <input type="email" name="email" value="<?= set_value('email') ?>">
            <br>

            <label for="password">Password</label>
            <input type="password" name="password" value="<?= set_value('password') ?>">
            

            <br><br><br><br>
            
            <center><input type="submit" name="submit" value="Crear usuario"></center>
             
        </form>
        
    </div>
    <br><br><br><br> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

