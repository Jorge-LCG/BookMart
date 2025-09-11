<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reclamo</title>
</head>
<body>
    <h1>Reclamo recibido</h1>
    <ul>
        <li><strong>Nombre:</strong> {{ $data['name'] }}</li>
        <li><strong>DNI:</strong> {{ $data['dni'] }}</li>
        <li><strong>Correo:</strong> {{ $data['email'] }}</li>
        <li><strong>Tipo de Reclamo:</strong> {{ $data['tipo_reclamo'] }}</li>
        <li><strong>Asunto:</strong> {{ $data['subject'] }}</li>
    </ul>
    <p><strong>Descripción:</strong></p>
    <p>{{ $data['description'] }}</p>
</body>
</html>
