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
<h1>Lista de instructores</h1>
<a href="{{ route('instructores.create') }}">Nuevo instructor</a>
<br><br>
<table class="table">
      <thead>
<tr>
<th scope="col">nis</th>
<th scope="col">Tipo de documento</th>
<th scope="col">No. de documento</th>
<th scope="col">Nombres del instructor</th>
<th scope="col">Apellidos del instructor</th>
<th scope="col">Direccion</th>
<th scope="col">No. de telefono</th>
<th scope="col">Correo institucional</th>
<th scope="col">Correo electronico</th>
<th scope="col">Tipo de sexo</th>
<th scope="col">Fecha de nacimiento</th>
<th scope="col">Acciones</th>
</tr>
</thead>
  <tbody>
@foreach($instructores as $i)
<tr>
<td>{{ $i->nis }}</td>
<td>{{ $i->Tdoc }}</td>
<td>{{ $i->Ndoc }}</td>
<td>{{ $i->nombres }}</td>
<td>{{ $i->apellidos }}</td>
<td>{{ $i->direccion }}</td>
<td>{{ $i->telefono }}</td>
<td>{{ $i->correoinstitucional }}</td>
<td>{{ $i->correopersonal }}</td>
<td>{{ $i->sexo }}</td>
<td>{{ $i->fechaNac }}</td>
<td>
<a href="{{ route('instructores.show', $i->nis) }}">Ver</a>
<a href="{{ route('instructores.edit', $i->nis) }}">Editar</a>
<form action="{{ route('instructores.destroy', $i->nis) }}" method="POST" style="display:inline;">
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
