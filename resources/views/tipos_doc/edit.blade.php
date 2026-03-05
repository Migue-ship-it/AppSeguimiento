<!DOCTYPE html>
<html lang = "es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
 <h2>Editar Tipo de Documento</h2>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
<form action="{{ route('tipos_doc.update', $tipos->nis) }}" method="POST">
@csrf
@method('PUT')
<label>Denominación:</label><br>
<input type="text" name="denominacion" value="{{ $tipos->denominacion }}"><br><br>
<label>Observación:</label><br> <input type="text" name="observacion" value="{{ $tipos->observacion }}"> <br><br>
<button type="submit">Actualizar</button>
</form>
<br>
<a href="{{ route('tipos_doc.index') }}">Volver</a>
</body></html>