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
<h1>Lista de Tipos de documento</h1>
<a href="{{ route('tipos_doc.create') }}">Nuevo Tipo de documento</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nis</th>
      <th scope="col">Denominaciones</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($tipos as $tipos_documento)
<td>{{ $tipos_documento->nis }}</td>
<td>{{ $tipos_documento->denominacion }}</td>
<td>{{ $tipos_documento->observacion }}</td>
<td>
<a href="{{ route('tipos_doc.show', $tipos_documento->nis) }}">Ver tipo de documento</a>
<a href="{{ route('tipos_doc.edit', $tipos_documento->nis) }}">Editar tipo de documento</a>
<form action="{{ route('tipos_doc.destroy', $tipos_documento->nis) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Eliminar tipo de documento</button>
</td>
</form>
</tr>
@endforeach
<a href="{{ route('dashboard') }}">Volver al inicio</a>
</tbody>
</table>
</body></html>