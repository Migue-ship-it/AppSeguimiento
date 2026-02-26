<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle o muestreo</title>
</head>
<body>
<h1>Detalle de las EPS</h1>
<p><strong>nis:</strong> {{ $eps->nis }}</p>
<p><strong>No de documento:</strong> {{ $eps->Numdoc }}</p>
<p><strong>denominacion:</strong> {{ $eps->denominacion }}</p>
<p><strong>observacion:</strong> {{ $eps->observacion }}</p>
<br>
<a href="{{ route('eps.index') }}">Volver</a>
</body>
</html>
