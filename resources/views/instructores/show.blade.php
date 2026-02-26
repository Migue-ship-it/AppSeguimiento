<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
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
