<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del aprendiz</h1>
<p><strong>nis:</strong> {{ $aprendices->nis }}</p>
<p><strong>Tipo de documento:</strong> {{ $aprendices->Tdoc }}</p>
<p><strong>No. de documento:</strong> {{ $aprendices->Ndoc }}</p>
<p><strong>Nombres:</strong> {{ $aprendices->nombres }}</p>
<p><strong>Apellidos:</strong> {{ $aprendices->apellidos }}</p>
<p><strong>Direccion:</strong> {{ $aprendices->direccion }}</p>
<p><strong>No. de telefono:</strong> {{ $aprendices->telefono }}</p>
<p><strong>Correo institucional:</strong> {{ $aprendices->correoinstitucional }}</p>
<p><strong>Correo electronico:</strong> {{ $aprendices->correopersonal }}</p>
<p><strong>Sexo:</strong> {{ $aprendices->sexo }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $aprendices->fechaNac }}</p>
<br>
<a href="{{ route('aprendices.index') }}">Volver</a>
</body>
</html>
