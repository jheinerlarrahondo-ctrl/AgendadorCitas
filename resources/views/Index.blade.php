<div id="header"></div>
@include('Components.Header')
<link rel="stylesheet" href="{{ asset('css/Style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<div class="container">
    <div id="formulario"></div>
    @include('Components.form-cita')
</div>

<div id="footer"></div>
@include('Components.Footer')

<script src="assets/js/app.js"></script>