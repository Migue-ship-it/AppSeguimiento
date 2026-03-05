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
<h1>Lista de bitacoras</h1>
<a href="{{ route('bitacoras.create') }}">Nueva bitacora</a>
<br><br>
<table class="table">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Usuario</th>
<th scope="col">PDF</th>
<th scope="col">Fecha de creacion</th>
<th scope="col">Fecha de actualizacion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($bitacora as $b)
<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->user->name ?? 'Sin usuario' }}</td>
<td>
    @if($b->file)
    <a href="{{ asset($b->file) }}" download>Ver PDF</a>   
    @else
      Sin PDF  
    @endif
<td>{{ $b->created_at }}</td>
<td>{{ $b->updated_at }}</td>
<td>
<a href="{{ route('bitacoras.show', $b->id) }}">Ver</a>
<a href="{{ route('bitacoras.edit', $b->id) }}">Editar</a>
<form action="{{ route('bitacoras.destroy', $b->id) }}" method="POST" style="display:inline;">
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
