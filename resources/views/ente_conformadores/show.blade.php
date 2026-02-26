<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
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
