<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
