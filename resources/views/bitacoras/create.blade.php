<!DOCTYPE html><html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1>Crear bitacoras</h1>
<form method="POST" action="{{ route('bitacoras.store') }}" enctype="multipart/form-data">
    @csrf
    <label class = "form-label">Adjuntar PDF</label>
    <input type="file" name="file" class="form-control" accept="application/pdf" required>
    @error ('file')
    <div class="text-danger">{{ $message}}
        {{ session('error') }}
@enderror
</div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<br><a href="{{ route('bitacoras.index') }}">Volver</a>
</body></html>
