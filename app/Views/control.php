<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='Vista4.css') }}"> <!-- Referencia a los estilos -->
</head>
<body>

<div class="container">
        <h1 class="title">Panel de control</h1>

        <div class="form-container">
        <div class="comedor">
        <img src="{{ url_for('static', filename='pollo1.png') }}" alt="Logo Pollo" />  <!-- ejemplos de como referenciar una imagen -->
        </div>

        <div class="form-container">
            <a href="{{ url_for('contraseña') }}" class="formulario-button">Siguiente</a>
            

        </div>
</body>
</html>