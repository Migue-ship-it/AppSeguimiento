<!DOCTYPE html>
<html lang = "es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
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