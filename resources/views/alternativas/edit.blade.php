<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar alternativa</h1>
<form action="{{ route('alternativas.update', $alternativa->id_alternativa) }}" method="POST">
@csrf
@method('PUT')
<label>Nombre:</label>
<input type="text" name="nombre" value="{{ $alternativa->nombre }}" required>
<br><br>
<label>Descripcion:</label>
<input type="text" name="descripcion" value="{{ $alternativa->descripcion }}" required>
<br><br>
<select name="estado" required>
<option value="">Seleccione el estado</option>
<option value="activo" value="{{ $alternativa->estado }}">Activo</option>
<option value="inactivo" value="{{ $alternativa->estado }}">Inactivo</option>
</select><br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('alternativas.index') }}">Volver</a>
</body></html>