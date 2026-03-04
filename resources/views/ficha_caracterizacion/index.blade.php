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
<h1>Lista de fichas de caracterizacion</h1>
<a href="{{ route('ficha_caracterizacion.create') }}">Nueva ficha</a>
<br><br>
<table class="table">
      <thead>
<tr>
<th scope="col">nis</th>
<th scope="col">Codigo #</th>
<th scope="col">No. de cupos</th>
<th scope="col">Fecha de inicio de la ficha</th>
<th scope="col">Fecha de finalizacion</th>
<th scope="col">Observaciones</th>
<th scope="col">Acciones</th>
</tr>
@foreach($ficha as $caracterizacion)
<tr>
<td>{{ $caracterizacion->nis }}</td>
<td>{{ $caracterizacion->codigo }}</td>
<td>{{ $caracterizacion->cupo }}</td>
<td>{{ $caracterizacion->fecha_Inicio }}</td>
<td>{{ $caracterizacion->fecha_Fin }}</td>
<td>{{ $caracterizacion->observaciones }}</td>
<td>
<a href="{{ route('ficha_caracterizacion.show', $caracterizacion->nis) }}">Ver</a>
<a href="{{ route('ficha_caracterizacion.edit', $caracterizacion->nis) }}">Editar</a>
<form action="{{ route('ficha_caracterizacion.destroy', $caracterizacion->nis) }}" method="POST" style="display:inline;">
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
