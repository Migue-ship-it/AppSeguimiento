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
<h1>Crear Tipos de documento</h1>
<form action="{{ route('centro_formacion.store') }}" method="POST">
@csrf
<label>Denominacion:</label>
<input type="text" name="denominacion" id="denominacion" required>
<br><br>
<label>Direccion:</label>
<input type="text" name="direccion" id="direccion" required>
<br><br>
<button type="submit">Guardar</button></form>
<br><a href="{{ route('centro_formacion.index') }}">Volver</a>
</body></html>