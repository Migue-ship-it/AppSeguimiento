<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>Crear instructores</h1>
<form action="{{ route('instructores.store') }}" method="POST">
@csrf
<select name="tbltipos_documento_nis" id="tbltipos_documento_nis" required>
<option value="">Seleccione el tipo de documento
@foreach($tipos_documento as $t)
<option value="{{ $t->nis}}">{{ $t->denominacion}}</option>
@endforeach
</select><br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc" id="Ndoc" required>
<br><br>
<label>Nombres:</label>
<input type="text" name="nombres" id="nombres" placeholder="Nombres completos del instructor" required>
<br><br>
<label>Apellidos:</label>
<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos completos del instructor" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" id="direccion" required>
<br><br>
<label>No. de telefono:</label>
<input type="text" name="telefono" id="telefono" required>
<br><br>
<label>Correo institucional:</label>
<input type="text" name="correoinstitucional" id="correoinstitucional" placeholder="usuario@sena.edu.co" required>
<br><br>
<label>Correo electronico:</label>
<input type="text" name="correopersonal" id="correopersonal" placeholder="usuario@gmail/hotmail.com" required>
<br><br>
<select name="sexo" id="sexo" min="1" max="4" required>
<option value="">Seleccione su sexo</option>
<option value="1">Masculino</option>
<option value="2">Femenino</option>
<option value="3">Prefiero no decirlo</option>
<option value="4">Personalizado</option>
</select><br><br>
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" id="fechaNac" required>
<br><br>

<select name="tbleps_nis" id="tbleps_nis" required>
<option value="">Seleccione la EPS que pertenece:</option>
@foreach($eps as $e)
<option value="{{ $e->nis}}">{{ $e->denominacion}}</option>
@endforeach
</select><br></br>
<select name="tblrolesacademicos_nis" id="tblrolesacademicos_nis" required>
<option value="">Rol academico:</option>
@foreach($rolesacademicos as $r)
<option value="{{ $r->nis}}">{{ $r->descripcion}}</option>
@endforeach
</select><br></br>
<button type="submit">Guardar</button></form>
<br></br>
<a href="{{ route('instructores.index') }}">Volver</a>
</body></html>