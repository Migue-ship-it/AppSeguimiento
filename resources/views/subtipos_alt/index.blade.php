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
<h1>Lista de subtipos de alternativa</h1>
<a href="{{ route('subtipos_alt.create') }}">Nuevo subtipo</a>
<br><br>
<table class="table">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">nombre</th>
<th scope="col">descripcion</th>
<th scope="col">estado</th>
<th scope="col">Fecha de creacion</th>
<th scope="col">Fecha de actualizacion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
    <tr>
@foreach($subtipo as $s)
<td>{{ $s->id_subtipo }}</td>
<td>{{ $s->nombre }}</td>
<td>{{ $s->descripcion }}</td>
<td>{{ $s->estado }}</td>
<td>{{ $s->created_at }}</td>
<td>{{ $s->updated_at }}</td>
<td>
<a href="{{ route('subtipos_alt.show', $s->id_subtipo) }}">Ver</a>
<a href="{{ route('subtipos_alt.edit', $s->id_subtipo) }}">Editar</a>
<form action="{{ route('subtipos_alt.destroy', $s->id_subtipo) }}" method="POST" style="display:inline;">
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
