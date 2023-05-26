<!-- app/Views/users/index.php -->

<h2><?= esc($title) ?></h2>

<?php if (!empty($doctors) && is_array($doctors)): ?>

    <?php foreach ($doctors as $doctor): ?>

        <h3><?= esc($doctor['Nombre']) ?></h3>

        <div class="main">
            <p><strong>Especialidad:</strong> <?= esc($doctor['Especialidad']) ?></p>
            <p><strong>Fecha:</strong> <?= esc($doctor['Fecha']) ?></p>
            <p><strong>Cantidad de Citas:</strong> <?= esc($doctor['cantidad_citas']) ?></p>
        </div>

    <?php endforeach; ?>

<?php else: ?>
    <br><br><br><br><br><br>
    <h3>No se encontraron doctores</h3>

    <p>No se encontraron doctores disponibles.</p>

<?php endif; ?>