<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="<?= base_url('Principal.css') ?>"> <!-- Referencia a los estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <!-- Barra lateral -->
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <ul>
            <li><a href="<?= base_url('/gestion') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Gestión" class="menu-icon">Gestión de aves
                </a></li>
            <li><a href="<?= base_url('/control') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Control" class="menu-icon">Control del alimentador
                </a></li>
            <li><a href="<?= base_url('/notificacion') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Notificaciones" class="menu-icon">Notificaciones
                </a></li>
            <li><a href="<?= base_url('/report') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Reportes" class="menu-icon">Reportes
                </a></li>
            <li><a href="<?= base_url('/manual') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Manual" class="menu-icon">Manual del dispositivo
                </a></li>
            <li><a href="<?= base_url('/ayud') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Ayuda" class="menu-icon">Ayuda
                </a></li>
        </ul>
        <div class="contacto-info">
            <img src="<?= base_url('/pollo1.png') ?>" class="menu-icons" alt="Contacto">
            <p>Línea de contacto</p>
            <p>2311442661</p>
        </div>
    </div>

    <!-- Panel principal -->
    <div class="content">
        <h1>Bienvenido al panel de control</h1>
        
        <?php if (isset($view_content)): ?>
            <?= $view_content ?>
        <?php endif; ?>

        <!-- Botones para lotes -->
        <div class="form-container">
            <a href="<?= site_url('registroLot') ?>" class="button1">Registro de lote de pollos</a>
            <button type="button" class="button2" onclick="location.href='visualizacionLotes'">Visualización de lotes</button>
        </div>
    </div>
</body>

</html>