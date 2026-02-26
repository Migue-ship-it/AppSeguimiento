<!DOCTYPE html><html lang="es">
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
<h1>Crear ente coformador</h1>
<form action="{{ route('ente_conformadores.store') }}" method="POST">
@csrf
<select name="Tdoc" id="Tdoc" min="1" max="4" required>
<option value="">Seleccione el tipo de documento</option>
<option value="1">Cédula de Ciudadanía</option>
<option value="2">Cédula de Extranjería</option>
<option value="3">Permiso por Protección Temporal (PPT)</option>
<option value="4">Permiso Especial de Permanencia (PEP)</option>
<br><br>
<label>No. de documento:</label>
<input type="number" name="Ndoc"  id="Ndoc"  required>
<br><br>
<label>Razon social:</label>
<input type="text" name="razonsocial" id="razonsocial" placeholder="Nombres y apellidos del ente" required>
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
<label>Fecha de nacimiento:</label>
<input type="date" name="fechaNac" id="fechaNac" required>
<br><br>
<button type="submit">Guardar</button></form>
<br><a href="{{ route('ente_conformadores.index') }}">Volver</a>
</body></html>