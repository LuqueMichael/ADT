@extends('modules.blog.admin.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h6>Publicaciones</h6>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="{{ route('blog.admin.post.save') }}"
                                        class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Agregar Publicacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-flush dataTable-table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Titulo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Enlace</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Portada</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Usuario</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Categoria</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Publicado el</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        var table = document.getElementById('datatable')

        $(() => {

            init()

        })


        function init() {
            table = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blog.admin.show') }}",
                order: [
                    [0, 'desc']
                ],
                columns: [{
                        data: 'in_postid',
                        name: 'in_postid'
                    },
                    {
                        data: 'vc_title',
                        name: 'vc_title'
                    },
                    {
                        data: 'vc_slug',
                        name: 'vc_slug'
                    },
                    {
                        data: 'vc_cover',
                        name: 'vc_cover'
                    },
                    {
                        data: 'in_userid',
                        name: 'in_userid'
                    },
                    {
                        data: 'in_categoryid',
                        name: 'in_categoryid'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],

                language: {
                    paginate: {
                        previous: '<<',
                        next: '>>'
                    }
                }
            });
        }
    </script>
@endsection
