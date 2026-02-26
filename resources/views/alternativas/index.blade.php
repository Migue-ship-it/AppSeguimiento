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
<h1>Lista de alternativas</h1>
<a href="{{ route('alternativas.create') }}">Nueva alternativa</a>
<br><br>
<table class="table">
<tr>
<th scope="col">nis</th>
<th scope="col">Nombre</th>
<th scope="col">Descripcion</th>
<th scope="col">estado</th>
<th scope="col">Fecha de creacion</th>
<th scope="col">Fecha de actualizacion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($alternativa as $a)
<tr>
<td>{{ $a->nis }}</td>
<td>{{ $a->nombre }}</td>
<td>{{ $a->descripcion }}</td>
<td>{{ $a->estado }}</td>
<td>{{ $a->created_at }}</td>
<td>{{ $a->updated_at }}</td>
<td>
<a href="{{ route('alternativas.show', $a->nis) }}">Ver</a>
<a href="{{ route('alternativas.edit', $a->nis) }}">Editar</a>
<form action="{{ route('alternativas.destroy', $a->nis) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</body></html>
