<section class="card">
    <h2>Agendar Cita Médica</h2>

    <form id="citaForm" action="{{ route('citas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Paciente</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="razon">Razón de Consulta</label>
            <textarea id="razon" name="razon" required></textarea>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de Cita</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>

        <button type="submit">Agendar Cita</button>
    </form>

    @if(session('success'))
        <div id="mensaje">{{ session('success') }}</div>
    @endif
</section>