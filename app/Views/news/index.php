<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profesional View</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Estilos personalizados -->
        <style>
            body {
                background-color: #f0f8ff;
            }

            .catalog {
                margin-top: 20px;
            }

            .catalog .card {
                background-color: #f0f8ff;
                border: none;
                margin-bottom: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .catalog .card-header {
                background-color: #007bff;
                color: #fff;
                text-align: center;
                font-weight: bold;
            }

            .catalog .card-body {
                text-align: center;
            }
        </style>
    </head>

    <body>
       
        <div class="container">
            <br><br><br><br><br><br>
                    <div class="card-header">
                        <h2>Bienvenido a agendar su cita a continuacion se muestra a los especialistas disponibles</h2>
                    </div>
            <br>
            <?php if (!empty($news) && is_array($news)): ?>
                <?php foreach ($news as $news_item): ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><?= esc($news_item['title']) ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="main">
                               Especialidad: <?= esc($news_item['body']) ?>
                            </div>
                            <div class="main">
                               Fecha disponible: <?= esc($news_item['Fecha_cita']) ?>
                            </div>
                            <p><a type="button" class="btn btn-outline-primary" href="/news/<?= esc($news_item['slug'], 'url') ?>">Agendar cita</a></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <div class="card">
                    <div class="card-header">
                        <h3>No News</h3>
                    </div>
                    <div class="card-body">
                        <p>Unable to find any news for you.</p>
                    </div>
                </div>
            <?php endif ?>
        </div>

        <!-- jQuery y Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    </body>

</html>


