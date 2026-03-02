<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del aprendiz</h1>
<p><strong>nis:</strong> {{ $aprendiz->nis }}</p>
<p><strong>Tipo de documento:</strong> {{ $aprendiz->Tdoc }}</p>
<p><strong>No. de documento:</strong> {{ $aprendiz->Ndoc }}</p>
<p><strong>Nombres:</strong> {{ $aprendiz->nombres }}</p>
<p><strong>Apellidos:</strong> {{ $aprendiz->apellidos }}</p>
<p><strong>Direccion:</strong> {{ $aprendiz->direccion }}</p>
<p><strong>No. de telefono:</strong> {{ $aprendiz->telefono }}</p>
<p><strong>Correo institucional:</strong> {{ $aprendiz->correoinstitucional }}</p>
<p><strong>Correo electronico:</strong> {{ $aprendiz->correopersonal }}</p>
<p><strong>Sexo:</strong> {{ $aprendiz->sexo }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $aprendiz->fechaNac }}</p>
<br>
<a href="{{ route('aprendices.index') }}">Volver</a>
</body>
</html>
