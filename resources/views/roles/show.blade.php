<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del rol</h1>
<p><strong>nis:</strong> {{ $roles->nis }}</p>
<p><strong>Descripcion:</strong> {{ $roles->descripcion }}</p>
<br>
<a href="{{ route('roles.index') }}">Volver</a>
</body>
</html>
