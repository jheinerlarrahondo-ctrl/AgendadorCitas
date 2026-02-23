<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clínica Salud Integral</title>

    <!-- CSS del proyecto -->
   <link rel="stylesheet" href="{{ asset('css/Style.css') }}">

    <!-- Font Awesome desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- Header dinámico -->
    <div id="header"></div>
    @include('Components.Header')
    <!-- HERO -->
    <section class="hero">
        <div class="container hero-container">
            <h2>CITAS MÉDICAS <br>FÁCILES</h2>

            <a href="{{ route('Index') }}" class="btn-hero">
                Agenda tu Cita Hoy
            </a>
        </div>
    </section>

    <!-- Footer dinámico -->
    <div id="footer"></div>
    @include('Components.Footer')
    <!-- JS del proyecto -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html> 