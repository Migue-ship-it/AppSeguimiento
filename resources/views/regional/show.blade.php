<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del regional</h1>
<p><strong>nis:</strong> {{ $regional->nis }}</p>
<p><strong>Código:</strong> {{ $regional->codigo }}</p>
<p><strong>denominacion:</strong> {{ $regional->denominacion }}</p>
<p><strong>observacion:</strong> {{ $regional->observacion }}</p>
<br>
<a href="{{ route('regional.index') }}">Volver</a>
</body>
</html>
