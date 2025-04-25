@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4 display-5 fw-bold">Bienvenidos a la Universidad Americana (UAM)</h1>

    <div id="carruselUAM" class="carousel slide mb-5 rounded shadow" data-bs-ride="carousel">
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="{{ asset('images/img1.jpeg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img2.jpeg') }}" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img3.jpeg') }}" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselUAM" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselUAM" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="mb-4">
        <h2 class="h4 fw-semibold text-primary">Misión</h2>
        <p class="text-muted">
            “Formar líderes con visión global, emprendedores, con sólidos conocimientos científicos y principios humanísticos, 
            capaces de aprender permanentemente para hacer frente a los desafíos de la sociedad contemporánea”.
        </p>
    </section>

    <section class="mb-4">
        <h2 class="h4 fw-semibold text-primary">Visión</h2>
        <p class="text-muted">
            “Consolidarse como institución académica de clase internacional comprometida con el desarrollo humano equitativo y sostenible, 
            con la eficiencia y competitividad de una organización privada de alto rendimiento”.
        </p>
    </section>

    <section>
        <h2 class="h4 fw-semibold text-primary">Compromiso Académico</h2>
        <p class="text-muted">
            Está centrado en el estudiante y su aprendizaje, promoviendo los cuatro pilares de la educación: 
            <strong>aprender a conocer, aprender a hacer, aprender a ser y aprender a convivir</strong>.
        </p>
        <p class="text-muted">
            Está orientado a desarrollar en el estudiante competencias que lo preparen para un desempeño exitoso a nivel profesional y personal.
        </p>
        <p class="text-muted">
            Responde a un enfoque pedagógico que, reconociendo que enseñanza y aprendizaje son componentes de un mismo proceso, 
            pone su énfasis en el aprendizaje y en la construcción individual del conocimiento.
        </p>
    </section>
</div>
@endsection
