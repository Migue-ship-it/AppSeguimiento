<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<h2>Iniciar Sesión</h2>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Usuario:</label>
    <input type="text" name="documento" value="documento" required>
    <br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required>
    <br><br>
    <button type="submit">Ingresar</button>
</form>
<p><a href="{{ route('register') }}">Registrarse</a></p>
</body>
</html>