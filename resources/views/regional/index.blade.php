<!DOCTYPE html>
<html>
<head>
<title>Regionales</title>
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
<h1>Lista de Regionales</h1>
<a href="{{ route('regional.create') }}">Nueva Regional</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nis</th>
      <th scope="col">Codigo</th>
      <th scope="col">Denominacion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($regional as $r)
  <td>{{ $r->nis }}</td>
<td>{{ $r->codigo }}</td>
<td>{{ $r->denominacion }}</td>
<td>{{ $r->observacion }}</td>
<td>
<a href="{{ route('regional.show', $r->nis) }}">Ver</a>
<a href="{{ route('regional.edit', $r->nis) }}">Editar</a>
<form action="{{ route('regional.destroy', $r->nis) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</td>
</tr>
</form>
@endforeach
<a href="{{ route('dashboard') }}">Volver al inicio</a>
</tbody>
</table>
</body></html>