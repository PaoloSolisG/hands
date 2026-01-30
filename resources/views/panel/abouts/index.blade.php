@extends('layouts.app')

@section('title', 'Gestión de Nosotros')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Gestión de "Nosotros"</h4>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form id="aboutForm">
            @csrf
            <input type="hidden" name="id" value="{{ $about->id ?? '' }}">

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Subtítulo</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle ?? '' }}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Título Principal</label>
                                <input type="text" name="title1" class="form-control" value="{{ $about->title1 ?? '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Número (Contacto/Experiencia)</label>
                                <input type="text" name="numero" class="form-control" value="{{ $about->numero ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción General</label>
                        <textarea name="description" class="form-control" rows="4">{{ $about->description ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label fw-bold">Imagen de la Sección</label>
                <input type="file" name="image" id="imageInput" class="form-control" accept="image/*">

                <div class="mt-3 text-center border rounded p-2 bg-light">
                    {{-- Si existe la imagen en la BD y físicamente en el storage --}}
                    @if(isset($about->image) && $about->image)
                        <img id="img_preview" src="{{ asset('storage/' . $about->image) }}"
                            class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                    @else
                        {{-- Imagen por defecto si está vacío --}}
                        <img id="img_preview" src="https://placehold.co/600x400?text=Sin+Imagen"
                            class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                    @endif
                    <p class="text-muted small mt-2 mb-0" id="preview_text">
                        {{ isset($about->image) ? 'Imagen actual' : 'No hay imagen cargada' }}
                    </p>
                </div>
            </div>
</div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="form-label">Misión</label>
                    <textarea name="mission" class="form-control" rows="3">{{ $about->mission ?? '' }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Visión</label>
                    <textarea name="vision" class="form-control" rows="3">{{ $about->vision ?? '' }}</textarea>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn btn-primary" id="btnGuardar">
                    <i class="bx bx-save"></i> Guardar Cambios
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Preview de imagen
       $('#imageInput').change(function() {
    const file = this.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#img_preview').attr('src', e.target.result); // Actualiza la imagen
            $('#preview_text').text('Previsualización de nueva imagen');
        }
        reader.readAsDataURL(file);
    }
});

        $('#aboutForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: "{{ route('about.update') }}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() { $('#btnGuardar').prop('disabled', true).text('Guardando...'); },
                success: function(res) {
                    Swal.fire('¡Éxito!', res.message, 'success');
                },
                error: function() { Swal.fire('Error', 'No se pudo guardar', 'error'); },
                complete: function() { $('#btnGuardar').prop('disabled', false).html('<i class="bx bx-save"></i> Guardar Cambios'); }
            });
        });
    });
</script>
@endpush
