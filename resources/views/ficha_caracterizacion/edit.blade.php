<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Editar ficha de caracterizacion</h1>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
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