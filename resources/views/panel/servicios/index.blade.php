@extends('layouts.app')
@section('title', 'Gestión de Servicios')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h2>Gestión de Servicios</h2>
        <button class="btn btn-primary" onclick="nuevoServicio()">Nuevo Servicio</button>
    </div>

    <table id="tablaServicios" class="table table-striped w-100">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
    </table>
</div>

<div class="modal fade" id="modalServicio" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formServicio" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="servicio_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitulo">Servicio</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Imagen</label>
                        <input type="file" name="imagen" class="form-control" accept="image/*">
                        <div id="previewImagen" class="mt-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
    let tabla = $('#tablaServicios').DataTable({
        ajax: "{{ route('servicios.index') }}",
        columns: [
            { 
                data: 'imagen',
                render: function(data) {
                    return data ? `<img src="/storage/${data}" width="80">` : 'Sin imagen';
                }
            },
            { data: 'titulo' },
            { data: 'descripcion' },
            { 
                data: 'id',
                render: function(data) {
                    return `
                        <button class="btn btn-sm btn-warning" onclick="editarServicio(${data})">Editar</button>
                        <button class="btn btn-sm btn-danger" onclick="eliminarServicio(${data})">Eliminar</button>
                    `;
                }
            }
        ]
    });

    function nuevoServicio() {
        $('#formServicio')[0].reset();
        $('#servicio_id').val('');
        $('#previewImagen').html('');
        $('#modalServicio').modal('show');
    }

    function editarServicio(id) {
        $.get(`/panel/servicios/${id}/edit`, function(data) {
            $('#servicio_id').val(data.id);
            $('#titulo').val(data.titulo);
            $('#descripcion').val(data.descripcion);
            if(data.imagen) {
                $('#previewImagen').html(`<img src="/storage/${data.imagen}" width="100">`);
            }
            $('#modalServicio').modal('show');
        });
    }

    $('#formServicio').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: "{{ route('servicios.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                $('#modalServicio').modal('hide');
                tabla.ajax.reload();
                Swal.fire('Éxito', res.message, 'success');
            }
        });
    });

    function eliminarServicio(id) {
        if(confirm('¿Estás seguro?')) {
            $.ajax({
                url: `/panel/servicios/${id}/destroy`,
                method: "DELETE",
                data: { _token: "{{ csrf_token() }}" },
                success: function(res) {
                    tabla.ajax.reload();
                    Swal.fire('Eliminado', res.message, 'success');
                }
            });
        }
    }
</script>
@endpush