@extends('layouts.app')

@section('title', 'Gestión de Programas')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Listado de Programas</h4>
                <button type="button" id="btnNuevoPrograma" class="btn btn-primary">
                    <i class="bx bx-plus me-2"></i> Nuevo Programa
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="table-programs" class="table align-middle table-nowrap mb-0" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Icono</th>
                        <th>Título</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="programModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="programForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Nuevo Programa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="program_id" name="id">

                        <div class="mb-3">
                            <label class="form-label">Título del Programa</label>
                            <input type="text" id="title" name="title" class="form-control" required placeholder="Ej: Education Support">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Icono</label>
                            <input type="file" id="icon" name="icon" class="form-control" accept="image/*">

                            <div class="mt-3 text-center">
                                <img id="icon_preview" src="" class="rounded img-thumbnail"
                                     style="max-height: 100px; display: none; background-color: #f8f9fa;">
                                <p id="text_preview_icon" class="text-muted small mt-1" style="display: none;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar Programa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // 1. Inicializar DataTable (Sin columna de acciones)
            let table = $('#table-programs').DataTable({
                ajax: "{{ route('programs.index') }}",
               columns: [
    { data: 'id' },
    {
        data: 'icon',
        render: function(data) {
            let url = data ? `/storage/${data}` : '/admin/assets/images/no-image.png';
            return `<img src="${url}" class="rounded" style="height: 40px; width: 40px; object-fit: contain; background: #eee; padding: 5px;">`;
        }
    },
    {
        data: 'title',
        render: function(data, type, row) {
            // Mantenemos el clic en el título como opción secundaria
            return `<a href="javascript:void(0);" onclick="editProgram(${row.id})" class="fw-bold text-dark">${data}</a>`;
        }
    },
    {
        data: null, // Columna de Acciones
        render: function(data) {
            return `
                <div class="text-center">
                    <a href="javascript:void(0);" onclick="editProgram(${data.id})" class="text-primary me-3" title="Editar">
                        <i class="bx bx-pencil font-size-18"></i>
                    </a>
                    <a href="javascript:void(0);" onclick="deleteProgram(${data.id})" class="text-danger" title="Eliminar">
                        <i class="bx bx-trash font-size-18"></i>
                    </a>
                </div>
            `;
        }
    }
],
                language: { url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json" }
            });

            // 2. Previsualización de Icono
            $('#icon').change(function() {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $('#icon_preview').attr('src', e.target.result).show();
                        $('#text_preview_icon').text('Nuevo icono seleccionado').show();
                    }
                    reader.readAsDataURL(file);
                }
            });

            // 3. Abrir Modal Nuevo
            $('#btnNuevoPrograma').on('click', function() {
                $('#programForm')[0].reset();
                $('#program_id').val('');
                $('#icon_preview, #text_preview_icon').hide();
                $('#modalTitle').text('Nuevo Programa');
                // Mostramos el botón de eliminar solo si es edición (opcional, aquí lo ocultamos por ser nuevo)
                $('#btnEliminarModal').hide();
                $('#programModal').modal('show');
            });

            // 4. Guardar (Crear/Editar) vía AJAX
            $('#programForm').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('programs.store') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#btnGuardar').prop('disabled', true).text('Procesando...');
                    },
                    success: function(res) {
                        if (res.success) {
                            $('#programModal').modal('hide');
                            table.ajax.reload();
                            Swal.fire('¡Éxito!', res.message, 'success');
                        }
                    },
                    error: function() {
                        Swal.fire('Error', 'Revise los datos del formulario', 'error');
                    },
                    complete: function() {
                        $('#btnGuardar').prop('disabled', false).text('Guardar Programa');
                    }
                });
            });
        });

        /// 5. Función Editar (Se activa al clickear el título)
function editProgram(id) {
    $.get(`/panel/programs/${id}/edit`, function(data) {
        $('#program_id').val(data.id);
        $('#title').val(data.title);

        if (data.icon) {
            // CAMBIO AQUÍ: Añadimos /storage/ para que la imagen no salga rota
            $('#icon_preview').attr('src', `/storage/${data.icon}`).show();
            $('#text_preview_icon').text('Icono actual').show();
        } else {
            $('#icon_preview, #text_preview_icon').hide();
        }

        $('#modalTitle').text('Editar: ' + data.title);

        // Lógica del botón eliminar dentro del modal
        if(!$('#btnEliminarModal').length){
            $('.modal-footer').prepend('<button type="button" id="btnEliminarModal" class="btn btn-danger">Eliminar</button>');
        }

        $('#btnEliminarModal').show().off('click').on('click', function() {
            deleteProgram(data.id);
        });

        $('#programModal').modal('show');
    });
}
        // 6. Función Eliminar
        function deleteProgram(id) {
            Swal.fire({
                title: '¿Eliminar programa?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Sí, borrar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/panel/programs/${id}/destroy`,
                        method: "DELETE",
                        data: { "_token": "{{ csrf_token() }}" },
                        success: function(res) {
                            $('#programModal').modal('hide');
                            $('#table-programs').DataTable().ajax.reload();
                            Swal.fire('Borrado', res.message, 'success');
                        }
                    });
                }
            });
        }
    </script>
@endpush
