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
<h1>Crear subtipos de alternativa</h1>
<form action="{{ route('subtipos_alt.store') }}" method="POST">
@csrf
<label>Nombre:</label>
<input type="text" name="nombre" required>
<br><br>
<label>Descripcion:</label>
<input type="text" name="descripcion" required>
<br><br>
<select name="estado" required>
<option value="">Seleccione el estado</option>
<option value="activo">Activo</option>
<option value="inactivo">Inactivo</option>
<br><br></select><br></br>
<button type="submit">Guardar</button></form>
<br><a href="{{ route('subtipos_alt.index') }}">Volver</a>
</body></html>