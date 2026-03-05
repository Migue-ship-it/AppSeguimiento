<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Editar informacion del instructor</h1>
@if ($errors->any()) <div style="color: red;"> 
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}
</li>
 @endforeach 
</ul>
</div>
@endif
<form action="{{ route('instructores.update', $instructores->nis) }}" method="POST">
@csrf
@method('PUT')
<select name="Tdoc" id="Tdoc" min="1" max="4" required>
<option value="">Seleccione el tipo de documento</option>
<option value="1" value="{{ $instructores->Tdoc }}">Cédula de Ciudadanía</option>
<option value="2" value="{{ $instructores->Tdoc }}">Cédula de Extranjería</option>
<option value="3" value="{{ $instructores->Tdoc }}">Permiso por Protección Temporal (PPT)</option>
<option value="4" value="{{ $instructores->Tdoc }}">Permiso Especial de Permanencia (PPE)
</option>
<br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc" value="{{ $instructores->Ndoc }}" required>
<br><br>
<label>Nombres:</label>
<input type="text" name="nombres" placeholder="Nombres completos del instructor" value="{{ $instructores->razonsocial }}" required>
<br><br>
<label>Apellidos:</label>
<input type="text" name="apellidos" placeholder="Apellidos completos del instructor" value="{{ $instructores->razonsocial }}" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" value="{{ $instructores->direccion }}" required>
<br><br>
<label>No. de telefono:</label>
<input type="text" name="telefono" value="{{ $instructores->telefono }}" required>
<br><br>
<label>Correo institucional:</label>
<input type="text" name="correoinstitucional" placeholder="usuario@sena.edu.co" value="{{ $instructores->correoinstitucional }}" required>
<br><br>
<label>Correo electronico:</label>
<input type="text" name="correopersonal" placeholder="usuario@gmail/hotmail.com" value="{{ $instructores->correoinstitucional }}" required>
<br><br>
<select name="sexo" id="sexo" min="1" max="4" required>
<option value="">Seleccione su sexo</option>
<option value="1" value="{{ $instructores->sexo }}" >Masculino</option>
<option value="2" value="{{ $instructores->sexo }}">Femenino</option>
<option value="3" value="{{ $instructores->sexo }}">Prefiero no decirlo</option>
<option value="4" value="{{ $instructores->sexo }}">Personalizado</option>
<br><br>
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" value="{{ $instructores->fechaNac }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('instructores.index') }}">Volver</a>
</body></html>