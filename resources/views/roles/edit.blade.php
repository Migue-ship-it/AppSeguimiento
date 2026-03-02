<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar roles</h1>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
<form action="{{ route('roles.update', $roles->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Descripcion:</label>
<input type="text" name="descripcion" value="{{ $roles->descripcion }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('roles.index') }}">Volver</a>
</body></html>