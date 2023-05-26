<html>
<head>
    <title>Lista de Doctores</title>
</head>
<body>
    <ul id="doctors"></ul>

    <script>
        // Obtener los doctores desde la base de datos
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ci4tutorial";

        // Crear una conexión a la base de datos
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Consultar los doctores
        $sql = "SELECT Nombre FROM doctores";
        $result = $conn->query($sql);

        // Verificar si se obtuvieron resultados
        if ($result->num_rows > 0) {
            // Generar la lista de doctores
            echo "var doctorsList = '<ul>';";
            while ($row = $result->fetch_assoc()) {
                echo "doctorsList += '<li>" . $row["Nombre"] . "</li>';";
            }
            echo "doctorsList += '</ul>';";
        } else {
            echo "var doctorsList = '<p>No hay doctores disponibles.</p>';";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>

        // Mostrar la lista de doctores en el HTML
        document.getElementById('doctors').innerHTML = doctorsList;
    </script>
</body>
</html>