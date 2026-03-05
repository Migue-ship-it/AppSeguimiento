<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Detalle del instructor</h1>
<p><strong>nis:</strong> {{ $instructores->nis }}</p>
<p><strong>Tipo de documento:</strong> {{ $instructores->Tdoc }}</p>
<p><strong>No. de documento:</strong> {{ $instructores->Ndoc }}</p>
<p><strong>Nombres del instructor:</strong> {{ $instructores->nombres }}</p>
<p><strong>Apellidos del instructor:</strong> {{ $instructores->apellidos }}</p>
<p><strong>Direccion:</strong> {{ $instructores->direccion }}</p>
<p><strong>No. de telefono:</strong> {{ $instructores->telefono }}</p>
<p><strong>Correo institucional:</strong> {{ $instructores->correoinstitucional }}</p>
<p><strong>Correo electronico:</strong> {{ $instructores->correopersonal }}</p>
<p><strong>Tipo de sexo:</strong> {{ $instructores->sexo }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $instructores->fechaNac }}</p>
<br>
<a href="{{ route('instructores.index') }}">Volver</a>
</body>
</html>
