<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar informacion del aprendiz</h1>
<form action="{{ route('aprendices.update', $aprendices->nis) }}" method="POST">
@csrf
@method('PUT')
<select name="Tdoc" id="Tdoc" min="1" max="5" required>
<option value="">Seleccione el tipo de documento</option>
<option value="1" value="{{ $aprendices->Tdoc }}">Tarjeta de identidad</option>
<option value="2" value="{{ $aprendices->Tdoc }}">Cédula de Ciudadanía</option>
<option value="3" value="{{ $aprendices->Tdoc }}">Cédula de Extranjería</option>
<option value="4" value="{{ $aprendices->Tdoc }}">Permiso por Protección Temporal (PPT)</option>
<option value="5" value="{{ $aprendices->Tdoc }}">Permiso Especial de Permanencia (PPE)</option>
<br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc" id="Ndoc" value="{{ $aprendices->Ndoc }}" required>
<br><br>
<label>Nombres:</label>
<input type="text" name="razonsocial" id="razonsocial" placeholder="Nombres y apellidos del aprendiz" value="{{ $aprendices->razonsocial }}" required>
<br><br>
<label>Apellidos:</label>
<input type="text" name="razonsocial" id="razonsocial" placeholder="Nombres y apellidos del aprendiz" value="{{ $aprendices->razonsocial }}" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" id="direccion" value="{{ $aprendices->direccion }}" required>
<br><br>
<label>No. de telefono:</label>
<input type="text" name="telefono" id="telefono" value="{{ $aprendices->telefono }}" required>
<br><br>
<label>Correo institucional:</label>
<input type="text" name="correoinstitucional" id="correoinstitucional" placeholder="usuario@soy.sena.edu.co" value="{{ $aprendices->correoinstitucional }}" required>
<br><br>
<label>Correo electronico:</label>
<input type="text" name="correopersonal" id="correopersonal" placeholder="usuario@gmail/hotmail.com" value="{{ $aprendices->correoinstitucional }}" required>
<br><br>
<select name="sexo" id="sexo" min="1" max="4" required>
<option value="">Seleccione su sexo</option>
<option value="1" value="{{ $aprendices->sexo }}">Masculino</option>
<option value="2" value="{{ $aprendices->sexo }}">Femenino</option>
<option value="3" value="{{ $aprendices->sexo }}">Prefiero no decirlo</option>
<option value="4" value="{{ $aprendices->sexo }}">Personalizado</option>
<br><br>
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" id="fechaNac" value="{{ $aprendices->fechaNac }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('aprendices.index') }}">Volver</a>
</body></html>