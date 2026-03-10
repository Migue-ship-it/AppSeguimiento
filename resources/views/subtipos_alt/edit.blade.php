<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
<form action="{{ route('subtipos_alt.update', $subtipo->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Nombre:</label>
<input type="text" name="nombre" value="{{ $subtipo->nombre) }}" required>
<br><br>
<label>Descripcion:</label>
<input type="text" name="descripcion" value="{{$subtipo->descripcion) }}" required>
<br><br>
<label>Estado:</label>
<select name="estado" required>
<option value="">Seleccione el estado</option>
<option value="activo" value="{{ $subtipo->estado) }}">Activo</option>
<option value="inactivo" value="{{ $subtipo->estado) }}">Inactivo</option>
</select><br><br>
<select name="tblalternativas_id_alternativa" id="tblalternativas_id_alternativa" min="1" max="4" required>
<option value="">Seleccione la alternativa que pertenece:</option>
<option value="1" value="{{ $subtipo->tblalternativas_id_alternativa }}">pasantia</option>
</select><br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('subtipos_alt.index') }}">Volver</a>
</body></html>