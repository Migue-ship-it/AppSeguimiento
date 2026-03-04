<!DOCTYPE html><html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
<h1>Lista de EPS</h1>
<a href="{{ route('eps.create') }}">Registros EPS</a>
<br><br>
<table class="table">
  <thead>
<tr>
<th scope="col">nis</th>
<th scope="col">Numero de documento</th>
<th scope="col">denominacion</th>
<th scope="col">observacion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($eps as $e)
<tr>
<td>{{ $e->nis }}</td>
<td>{{ $e->Numdoc }}</td>
<td>{{ $e->denominacion }}</td>
<td>{{ $e->observacion }}</td>
<td>
<a href="{{ route('eps.show', $e->nis) }}">Ver</a>
<a href="{{ route('eps.edit', $e->nis) }}">Editar</a>
<form action="{{ route('eps.destroy', $e->nis) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>
</td>
</tr>
@endforeach
<a href="{{ route('dashboard') }}">Volver al inicio</a>
</tbody>
</table>
</body></html>
