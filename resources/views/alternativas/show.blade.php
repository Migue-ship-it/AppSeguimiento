<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle de la alternativa</h1>
<p><strong>id:</strong> {{ $alternativa->id_alternativa }}</p>
<p><strong>Nombre:</strong> {{ $alternativa->nombre }}</p>
<p><strong>Descripcion:</strong> {{ $alternativa->descripcion }}</p>
<p><strong>estado:</strong> {{ $alternativa->estado }}</p>
<p><strong>Fecha de creacion:</strong> {{ $alternativa->created_at }}</p>
<p><strong>Fecha de actualizacion:</strong> {{ $alternativa->updated_at }}</p>
<br>
<a href="{{ route('alternativas.index') }}">Volver</a>
</body>
</html>
