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
<h1>Lista de ente conformadores</h1>
<a href="{{ route('ente_conformadores.create') }}">Nuevo ente coformador</a>
<br><br>
<table class="table">
      <thead>
<tr>
<th scope="col">nis</th>
<th scope="col">Tipo de documento</th>
<th scope="col">No. de documento</th>
<th scope="col">Razon social</th>
<th scope="col">Direccion</th>
<th scope="col">No. de telefono</th>
<th scope="col">Correo institucional</th>
<th scope="col">Fecha de nacimiento</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($ente as $conformador)
<tr>
<td>{{ $conformador->nis }}</td>
<td>{{ $conformador->Tdoc }}</td>
<td>{{ $conformador->Ndoc }}</td>
<td>{{ $conformador->razonsocial }}</td>
<td>{{ $conformador->direccion }}</td>
<td>{{ $conformador->telefono }}</td>
<td>{{ $conformador->correoinstitucional }}</td>
<td>{{ $conformador->fechaNac }}</td>
<td>
<a href="{{ route('ente_conformadores.show', $conformador->nis) }}">Ver</a>
<a href="{{ route('ente_conformadores.edit', $conformador->nis) }}">Editar</a>
<form action="{{ route('ente_conformadores.destroy', $conformador->nis) }}" method="POST" style="display:inline;">
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
