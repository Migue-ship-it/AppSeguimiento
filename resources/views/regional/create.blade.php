<!DOCTYPE html>
<html>
<head>
    <title>Crear Regional</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>Nueva Regional</h1>
<form action="{{ route('regional.store') }}" method="POST">
    @csrf
    <div class = "form-group col-md-3">
    <label for="codigo">Codigo</label>
    <input type="number" name="codigo" id="codigo" placeholder="#" required>
    <br><br>
    <label for="denominacion">Denominacion</label>
    <input type="text" name="denominacion" id="denominacion" required>
    <br><br>
    <label for="observacion">Observacion</label>
    <input type="text" name="observacion" id="observacion">
    <br><br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('regional.index') }}">Volver al inicio</a>
</body>
</html>
