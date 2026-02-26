<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle de la ficha de caracterizacion</h1>
<p><strong>nis:</strong> {{ $ficha->nis }}</p>
<p><strong>Codigo #:</strong> {{ $ficha->codigo }}</p>
<p><strong>No. de cupos:</strong> {{ $ficha->cupo }}</p>
<p><strong>Fecha de inicio de la ficha::</strong> {{ $ficha->fecha_Inicio }}</p>
<p><strong>Fecha de finalizacion:</strong> {{ $ficha->fecha_Fin }}</p>
<p><strong>Observaciones:</strong> {{ $ficha->observaciones }}</p>
<br>
<a href="{{ route('ficha_caracterizacion.index') }}">Volver</a>
</body>
</html>
