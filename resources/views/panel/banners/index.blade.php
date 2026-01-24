@extends('layouts.app')

@section('title', 'Gestión de Banners')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Listado de Banners</h4>
                <button type="button" id="btnNuevoBanner" class="btn btn-primary">
                    <i class="bx bx-plus me-2"></i> Nuevo Banner
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="table-banners" class="table align-middle table-nowrap mb-0" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="bannerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="bannerForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Nuevo Banner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="banner_id" name="id">

                        <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Texto Corto</label>
                            <input type="text" id="texto" name="texto" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imagen</label>
                            <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">

                            <div class="mt-3 text-center">
                                <img id="img_preview" src="" class="rounded img-thumbnail"
                                    style="max-height: 150px; display: none;">
                                <p id="text_preview" class="text-muted small mt-1" style="display: none;"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar Banner</button>
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
            // 1. DataTable
            let table = $('#table-banners').DataTable({
                ajax: "{{ route('banners.index') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'imagen',
                        render: function(data) {
                            let url = data ? `/storage/${data}` :
                                '/admin/assets/images/no-image.png';
                            return `<img src="${url}" class="rounded" style="height: 45px; width: 70px; object-fit: cover; border: 1px solid #ddd;">`;
                        }
                    },
                    {
                        data: 'titulo'
                    },
                    {
                        data: 'texto'
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `
                            <a href="javascript:void(0);" onclick="editBanner(${data.id})" class="text-primary me-3"><i class="bx bx-pencil font-size-18"></i></a>
                            <a href="javascript:void(0);" onclick="deleteBanner(${data.id})" class="text-danger"><i class="bx bx-trash font-size-18"></i></a>
                        `;
                        }
                    }
                ],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
                }
            });

            // 2. Previsualización al seleccionar archivo
            $('#imagen').change(function() {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $('#img_preview').attr('src', e.target.result).show();
                        $('#text_preview').text('Nueva imagen seleccionada').show();
                    }
                    reader.readAsDataURL(file);
                }
            });

            // 3. Abrir Modal Nuevo
            $('#btnNuevoBanner').on('click', function() {
                $('#bannerForm')[0].reset();
                $('#banner_id').val('');
                $('#img_preview').hide();
                $('#text_preview').hide();
                $('#modalTitle').text('Nuevo Banner');
                $('#bannerModal').modal('show');
            });

            // 4. Guardar (Crear o Editar)
            $('#bannerForm').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('banners.store') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#btnGuardar').prop('disabled', true).text('Procesando...');
                    },
                    success: function(res) {
                        if (res.success) {
                            $('#bannerModal').modal('hide');
                            table.ajax.reload();
                            Swal.fire('¡Éxito!', res.message, 'success');
                        }
                    },
                    error: function(xhr) {
                        $('#btnGuardar').prop('disabled', false).text('Guardar Banner');
                        Swal.fire('Error', 'Revise los campos requeridos', 'error');
                    },
                    complete: function() {
                        $('#btnGuardar').prop('disabled', false).text('Guardar Banner');
                    }
                });
            });
        });

        // 5. Función Editar
        function editBanner(id) {
            $.get(`/panel/banners/${id}/edit`, function(data) {
                $('#banner_id').val(data.id);
                $('#titulo').val(data.titulo);
                $('#texto').val(data.texto);
                $('#descripcion').val(data.descripcion);

                if (data.imagen) {
                    $('#img_preview').attr('src', `/storage/${data.imagen}`).show();
                    $('#text_preview').text('Imagen actual').show();
                } else {
                    $('#img_preview, #text_preview').hide();
                }

                $('#modalTitle').text('Editar Banner #' + data.id);
                $('#bannerModal').modal('show');
            });
        }

        // 6. Función Eliminar
        function deleteBanner(id) {
            Swal.fire({
                title: '¿Eliminar banner?',
                text: "Se borrará el registro y la imagen del servidor",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, borrar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/panel/banners/${id}/destroy`,
                        method: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            $('#table-banners').DataTable().ajax.reload();
                            Swal.fire('Borrado', res.message, 'success');
                        }
                    });
                }
            });
        }
    </script>
@endpush
