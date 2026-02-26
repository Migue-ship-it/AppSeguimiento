<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar regional</h1>
<form action="{{ route('regional.update', $regional->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Codigo #:</label>
<input type="number" name="codigo" value="{{ $regional->codigo }}" required>
<br><br>
<label>Denominacion:</label>
<input type="text" name="denominacion" value="{{ $regional->denominacion }}" required>
<br><br>
<label>Observacion:</label>
<input type="text" name="observacion" value="{{ $regional->observacion }}">
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('regional.index') }}">Volver</a>
</body></html>