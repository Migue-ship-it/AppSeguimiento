<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del Tipo de documento</h1>
<p><strong>nis:</strong> {{ $programa->nis }}</p>
<p><strong>denominacion:</strong> {{ $programa->denominacion }}</p>
<p><strong>observacion:</strong> {{ $programa->observacion }}</p>
<br>
<a href="{{ route('programa_formacion.index') }}">Volver</a>
</body>
</html>
