<!DOCTYPE html><html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>Crear fichas de caracterizacion</h1>
<form action="{{ route('ficha_caracterizacion.store') }}" method="POST">
@csrf
<label>Codigo #:</label>
<input type="number" name="codigo" id="codigo" required>
<br><br>
<label>No. de cupos:</label>
<input type="number" name="cupo" id="cupo" required>
<br><br>
<label>Fecha de inicio de la ficha:</label>
<input type="date" name="fecha_Inicio" id="fecha_Inicio" min="2024-01-01" max="2024-12-31" required>
<br><br>
<label>Fecha de finalizacion:</label>
<input type="date" name="fecha_Fin" id="fecha_Fin" min="2028-01-01" max="2028-12-31" required>
<br><br>
<label>Observaciones:</label>
<input type="text" name="observaciones" id="observaciones">
<br><br>
<button type="submit">Guardar</button></form>
<br><a href="{{ route('ficha_caracterizacion.index') }}">Volver</a>
</body></html>