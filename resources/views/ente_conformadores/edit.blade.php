<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizacion</title>
</head>
<body>
<h1>Editar informacion del ente coformador</h1>
<form action="{{ route('ente_conformadores.update', $ente->nis) }}" method="POST">
@csrf
@method('PUT')
<select name="Tdoc" id="Tdoc" min="1" max="4" required>
<option value="">Seleccione el tipo de documento</option>
<option value="1" value="{{ $ente->Tdoc }}">Cédula de Ciudadanía</option>
<option value="2" value="{{ $ente->Tdoc }}">Cédula de Extranjería</option>
<option value="3" value="{{ $ente->Tdoc }}">Permiso por Protección Temporal (PPT)</option>
<option value="4" value="{{ $ente->Tdoc }}">Permiso Especial de Permanencia (PEP)</option>
<br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc" value="{{ $ente->Ndoc }}" required>
<br><br>
<label>Razon social:</label>
<input type="text" name="razonsocial" placeholder="Nombres y apellidos del ente" value="{{ $ente->razonsocial }}" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" value="{{ $ente->direccion }}" required>
<br><br>
<label>No. de telefono:</label>
<input type="text" name="telefono" value="{{ $ente->telefono }}" required>
<br><br>
<label>Correo institucional:</label>
<input type="text" name="correoinstitucional" placeholder="usuario@sena.edu.co" value="{{ $ente->correoinstitucional }}" required>
<br><br>
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" value="{{ $ente->fechaNac }}" required>
<br><br>
<button type="submit">Actualizar</button></form>
<br><a href="{{ route('ente_conformadores.index') }}">Volver</a>
</body></html>