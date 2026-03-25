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
<select name="tbltipos_documento_nis" id="tbltipos_documento_nis" required>
<option value="">Seleccione el tipo de documento</option>
@foreach($tipos_documento as $t)
<option value="{{ $t->nis}}">{{ $instructores->tbltipos_documento_nis == $t->nis ? 'selected' : '' }}>{{ $t->denominacion}}</option>
@endforeach
</select><br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc" value="{{ $instructores->Ndoc }}" required>
<br><br>
<label>Nombres:</label>
<input type="text" name="nombres" placeholder="Nombres completos del instructor" value="{{ $instructores->nombres }}" required>
<br><br>
<label>Apellidos:</label>
<input type="text" name="apellidos" placeholder="Apellidos completos del instructor" value="{{ $instructores->apellidos }}" required>
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
<input type="text" name="correopersonal" placeholder="usuario@gmail/hotmail.com" value="{{ $instructores->correopersonal }}" required>
<br><br>
<select name="sexo" id="sexo" required>
<option value="">Seleccione su sexo</option>
<option value="1" value="{{ $instructores->sexo == 1 ? 'selected' : '' }}" >Masculino</option>
<option value="2" value="{{ $instructores->sexo == 2 ? 'selected' : '' }}">Femenino</option>
<option value="3" value="{{ $instructores->sexo == 3 ? 'selected' : '' }}">Prefiero no decirlo</option>
<option value="4" value="{{ $instructores->sexo == 4 ? 'selected' : '' }}">Personalizado</option>
<br><br>
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" value="{{ $instructores->fechaNac }}" required>
<br><br>
<select name="tbleps_nis" id="tbleps_nis" required>
<option value="">Seleccione la EPS que pertenece:</option>
@foreach($eps as $e)
<option value="{{ $e->nis}}"{{ $instructores->tbleps_nis == $e->nis ? 'selected' : ''}}>{{ $e->denominacion}}</option>
@endforeach
</select><br><br>
<select name="tblrolesacademicos_nis" id="tblrolesacademicos_nis" required>
<option value="">Seleccione su rol academico:</option>
@foreach($rolesacademicos as $r)
<option value="{{ $r->nis}}"{{ $instructores->tblrolesacademicos_nis == $r->nis ? 'selected' : ''}}">{{ $r->descripcion}}</option>
@endforeach
</select><br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('instructores.index') }}">Volver</a>
</body></html>