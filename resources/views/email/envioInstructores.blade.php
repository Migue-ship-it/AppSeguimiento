<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Notificación</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h1>Hola {{ $instructor ->nombres }}</h1>
<p>Bienvenido.</p>
<p>Tu correo institucional es: {{ $instructor->correoinstitucional}}</p>
<p>Descripcion (correo de prueba) relacionada a una alternativa</p>
</body>
</html>