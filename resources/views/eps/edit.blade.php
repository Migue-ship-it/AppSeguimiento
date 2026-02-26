<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar registro de EPS</h1>
<form action="{{ route('eps.update', $eps->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Numero de documento:</label>
<input type="text" name="Numdoc" value="{{ $eps->Numdoc }}" required>
<br><br>
<label>Denominacion:</label>
<input type="text" name="denominacion" value="{{ $eps->denominacion }}" required>
<br><br>
<label>Observacion:</label>
<input type="text" name="observacion" value="{{ $eps->observacion }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('eps.index') }}">Volver</a>
</body></html>