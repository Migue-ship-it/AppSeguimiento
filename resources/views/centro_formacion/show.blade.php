<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del centro de formacion</h1>
<p><strong>nis:</strong> {{ $centroformacion->nis }}</p>
<p><strong>denominacion:</strong> {{ $centroformacion->denominacion }}</p>
<p><strong>Direccion:</strong> {{ $centroformacion->direccion }}</p>
<br>
<a href="{{ route('centro_formacion.index') }}">Volver</a>
</body>
</html>
