<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Alternativa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1>Crear Alternativa</h1>

    <form action="{{ route('alternativas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
            @error('nombre')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            @error('descripcion')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="">Seleccione el estado</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
            @error('estado')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('alternativas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

<script>
const palabrasPermitidas = ['Contrato de Aprendizaje', 'Pasantia', 'Proyecto Productivo', 'Creación de una unidad productiva', 'Servicio Militar', 'Vinculacion laboral'];
const inputNombre = document.getElementById('nombre');

inputNombre.addEventListener('input', () => {
    const valor = inputNombre.value.trim();
    const esValido = palabrasPermitidas.some(p => p.toLowerCase() === valor.toLowerCase());
    if (!esValido) {
        inputNombre.setCustomValidity("Solo se permiten: " + palabrasPermitidas.join(', '));
    } else {
        inputNombre.setCustomValidity('');
    }
});
</script>
</body>
</html>
