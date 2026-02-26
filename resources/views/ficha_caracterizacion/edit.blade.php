<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar ficha de caracterizacion</h1>
<form action="{{ route('ficha_caracterizacion.update', $ficha->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Codigo #:</label>
<input type="number" name="codigo" value="{{ $ficha->codigo }}" required>
<br><br>
<label>No. de cupos:</label>
<input type="number" name="cupo" value="{{ $ficha->cupo }}" required>
<br><br>
<label>Fecha de inicio de la ficha:</label>
<input type="date" name="fecha_Inicio" value="{{ $ficha->fecha_Inicio }}" required>
<br><br>
<label>Fecha de finalizacion:</label>
<input type="date" name="fecha_Fin" value="{{ $ficha->fecha_Fin }}" required>
<br><br>
<label>Observaciones:</label>
<input type="text" name="observaciones" value="{{ $ficha->observaciones }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('ficha_caracterizacion.index') }}">Volver</a>
</body></html>