<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar tipo de documento</h1>
<form action="{{ route('centro_formacion.update', $centroformacion->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Denominacion:</label>
<input type="text" name="denominacion" value="{{ $centroformacion->denominacion }}" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" value="{{ $centroformacion->direccion }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('centro_formacion.index') }}">Volver</a>
</body></html>