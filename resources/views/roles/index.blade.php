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
<h1>Lista de roles</h1>
<a href="{{ route('roles.create') }}">Nuevo rol</a>
<br><br>
<table class="table">
<thead>
<tr>
<th scope="col">nis</th>
<th scope="col">Descripcion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($roles as $rol)
<tr>
<td>{{ $rol->nis }}</td>
<td>{{ $rol->descripcion }}</td>
<td>
<a href="{{ route('roles.show', $rol->nis) }}">Ver</a>
<a href="{{ route('roles.edit', $rol->nis) }}">Editar</a>
<form action="{{ route('roles.destroy', $rol->nis) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</td>
</tr>
</form>
@endforeach
</tbody>
</table>
</body></html>
