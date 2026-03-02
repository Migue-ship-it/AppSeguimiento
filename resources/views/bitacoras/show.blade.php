<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Detalle de la bitacora</h1>
<p><strong>ID:</strong> {{ $bitacora->id }}</p>
<p><strong>Usuario:</strong> {{ $bitacora->id_login->name }}</p>
<p><strong>PDF:</strong> {{ $bitacora->file}}</p>
<p><strong>Fecha de creacion:</strong> {{ $bitacora->created_at}}</p>
<p><strong>Fecha de actualizacion:</strong> {{ $bitacora->updated_at}}</p>
<br>
<a href="{{ route('bitacoras.index') }}">Volver</a>
</body>
</html>
