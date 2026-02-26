
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle del subtipo de alternativa</h1>
<p><strong>id:</strong> {{ $subtipos->id_subtipo }}</p>
<p><strong>nombre:</strong> {{ $subtipos->nombre }}</p>
<p><strong>descripcion:</strong> {{ $subtipos->descripcion }}</p>
<p><strong>estado:</strong> {{ $subtipos->estado }}</p>
<p><strong>Fecha de creacion:</strong> {{ $subtipos->created_at }}</p>
<p><strong>Fecha de actualizacion:</strong> {{ $subtipos->updated_at }}</p>
<br>
<a href="{{ route('subtipos_alt.index') }}">Volver</a>
</body>
</html>
