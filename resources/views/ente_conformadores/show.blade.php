<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Detalle del ente coformador</h1>
<p><strong>nis:</strong> {{ $ente->nis }}</p>
<p><strong>Tipo de documento:</strong> {{ $ente->Tdoc }}</p>
<p><strong>No. de documento:</strong> {{ $ente->Ndoc }}</p>
<p><strong>Razon social:</strong> {{ $ente->razonsocial }}</p>
<p><strong>Direccion:</strong> {{ $ente->direccion }}</p>
<p><strong>No. de telefono:</strong> {{ $ente->telefono }}</p>
<p><strong>Correo institucional:</strong> {{ $ente->correoinstitucional }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $ente->fechaNac }}</p>
<br>
<a href="{{ route('ente_conformadores.index') }}">Volver</a>
</body>
</html>
