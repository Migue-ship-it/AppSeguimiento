<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar subtipo de alternativa</h1>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
<form action="{{ route('subtipos_alt.update', $subtipos->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Nombre:</label>
<input type="text" name="nombre" value="{{ old('nombre', $subtipos->nombre) }}" required>
<br><br>
<label>Descripcion:</label>
<input type="text" name="descripcion" value="{{ old('descripcion', $subtipos->descripcion) }}" required>
<br><br>
<label>Estado:</label>
<select name="estado" required>
<option value="">Seleccione el estado</option>
<option value="activo" value="{{  old('estado', $subtipos->estado) }}">Activo</option>
<option value="inactivo" value="{{  old('estado', $subtipos->estado) }}">Inactivo</option>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('subtipos_alt.index') }}">Volver</a>
</body></html>