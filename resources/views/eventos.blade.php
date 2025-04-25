@extends('layouts.app')

@section('title', 'Eventos')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold">Conferencias Tecnológicas</h2>

    {{-- Evento 1 --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4">
        <div class="d-flex align-items-start">
            <i class="bi bi-git me-3 fs-2 text-primary"></i>
            <div>
                <h4 class="fw-semibold">Uso de GitHub en proyectos colaborativos</h4>
                <p class="text-muted mb-1">
                    Aprende a utilizar GitHub como plataforma de colaboración efectiva para equipos de desarrollo. Descubre flujos de trabajo ágiles y prácticas recomendadas.
                </p>
                <p class="text-secondary small mb-0"><strong>📅 Fecha:</strong> 26 de abril &nbsp;&nbsp; <strong>🕒 Hora:</strong> 10:00 AM</p>
            </div>
        </div>
    </div>

    {{-- Evento 2 --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4">
        <div class="d-flex align-items-start">
            <i class="bi bi-box-seam me-3 fs-2 text-success"></i>
            <div>
                <h4 class="fw-semibold">Introducción a Docker para entornos de desarrollo</h4>
                <p class="text-muted mb-1">
                    Descubre cómo crear entornos de desarrollo consistentes y portables usando contenedores Docker. Ideal para evitar el clásico "en mi máquina sí funciona".
                </p>
                <p class="text-secondary small mb-0"><strong>📅 Fecha:</strong> 27 de abril &nbsp;&nbsp; <strong>🕒 Hora:</strong> 2:00 PM</p>
            </div>
        </div>
    </div>

    {{-- Evento 3 --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4">
        <div class="d-flex align-items-start">
            <i class="bi bi-terminal-dash me-3 fs-2 text-danger"></i>
            <div>
                <h4 class="fw-semibold">Configuración básica de servidores Linux</h4>
                <p class="text-muted mb-1">
                    Aprende los primeros pasos para administrar servidores Linux: instalación, estructura de archivos, usuarios, permisos y configuraciones esenciales.
                </p>
                <p class="text-secondary small mb-0"><strong>📅 Fecha:</strong> 28 de abril &nbsp;&nbsp; <strong>🕒 Hora:</strong> 11:00 AM</p>
            </div>
        </div>
    </div>
</div>
@endsection
