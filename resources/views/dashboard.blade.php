<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title></head><body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<h2>Bienvenido {{ Auth::user()->name }}</h2>
<hr>
<h3>Menú del Sistema</h3>
<ul>
<li><a href="{{ route('bitacoras.index') }}">Ver Bitácora</a></li>
<li><a href="{{ route('alternativas.index') }}">Alternativas</a></li>
<li><a href="{{ route('aprendices.index') }}">Aprendices</a></li>
<li><a href="{{ route('ente_conformadores.index') }}">Entes Coformadores</a></li>
<li><a href="{{ route('centro_formacion.index') }}">Centros de formacion</a></li>
<li><a href="{{ route('eps.index') }}">EPS</a></li>
<li><a href="{{ route('ficha_caracterizacion.index') }}">Fichas de caracterizacion</a></li>
<li><a href="{{ route('instructores.index') }}">Instructores</a></li>
<li><a href="{{ route('programa_formacion.index') }}">Programas de formacion</a></li>
<li><a href="{{ route('regional.index') }}">Regionales</a></li>
<li><a href="{{ route('roles.index') }}">Roles</a></li>
<li><a href="{{ route('subtipos_alt.index') }}">Subtipos de alternativa</a></li>
<li><a href="{{ route('tipos_doc.index') }}">Tipos de documento</a></li>
<li><a href="{{ route('register') }}">Registrar Usuario</a></li></ul>
<hr>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit">Cerrar Sesión</button></form>
</body></html>
