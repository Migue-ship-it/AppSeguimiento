<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar tipo de documento</h1>
<form action="{{ route('programa_formacion.update', $programa->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Codigo #:</label>
<input type="number" name="codigo" value="{{ $programa->codigo }}" required>
<br><br>
<label>Denominacion:</label>
<input type="text" name="denominacion" value="{{ $programa->denominacion }}" required>
<br><br>
<label>Observacion:</label>
<input type="text" name="observacion" value="{{ $programa->observacion }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('programa_formacion.index') }}">Volver</a>
</body></html>