<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
