
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del subtipo de alternativa</h1>
<p><strong>id:</strong> {{ $subtipo->id_subtipo }}</p>
<p><strong>nombre:</strong> {{ $subtipo->nombre }}</p>
<p><strong>descripcion:</strong> {{ $subtipo->descripcion }}</p>
<p><strong>estado:</strong> {{ $subtipo->estado }}</p>
<p><strong>Fecha de creacion:</strong> {{ $subtipo->created_at }}</p>
<p><strong>Fecha de actualizacion:</strong> {{ $subtipo->updated_at }}</p>
<br>
<a href="{{ route('subtipos_alt.index') }}">Volver</a>
</body>
</html>
