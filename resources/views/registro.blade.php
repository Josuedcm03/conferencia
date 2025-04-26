@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="container">
    <h2>Registro a Conferencias</h2>
    <form id="formRegistro" onsubmit="return validarFormulario()" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Institucional</label>
            <input type="email" class="form-control" id="correo" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Conferencias</label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="evento1">
                <label class="form-check-label" for="evento1">GitHub</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="evento2">
                <label class="form-check-label" for="evento2">Docker</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="evento3">
                <label class="form-check-label" for="evento3">Linux</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Registro</button>
    </form>
    <div id="mensajeConfirmacion" class="alert alert-success mt-3 d-none">Registro enviado correctamente.</div>
</div>

<script>
function validarFormulario() {
    const nombre = document.getElementById('nombre');
    const correo = document.getElementById('correo');
    const carrera = document.getElementById('carrera');
    const eventos = [document.getElementById('evento1'), document.getElementById('evento2'), document.getElementById('evento3')];

    if (!nombre.value || !correo.value || !carrera.value || !correo.value.includes('@')) {
        alert('Completa todos los campos correctamente.');
        return false;
    }

    if (!eventos.some(e => e.checked)) {
        alert('Selecciona al menos una conferencia.');
        return false;
    }

    document.getElementById('mensajeConfirmacion').classList.remove('d-none');
    document.getElementById('formRegistro').reset();
    return false; // Evitar recarga
}
</script>
@endsection
