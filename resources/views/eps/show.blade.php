<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Detalle de las EPS</h1>
<p><strong>nis:</strong> {{ $eps->nis }}</p>
<p><strong>No de documento:</strong> {{ $eps->Numdoc }}</p>
<p><strong>denominacion:</strong> {{ $eps->denominacion }}</p>
<p><strong>observacion:</strong> {{ $eps->observacion }}</p>
<br>
<a href="{{ route('eps.index') }}">Volver</a>
</body>
</html>
