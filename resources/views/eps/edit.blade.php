<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Editar registro de EPS</h1>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
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