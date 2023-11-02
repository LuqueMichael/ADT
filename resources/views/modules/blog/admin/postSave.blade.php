@extends('modules.blog.admin.master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>{{ $name }} Publicacion</h6>
                    </div>
                    <hr class="my-2">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container">
                            <form id="form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ ($post->vc_title) ?? '' }}"
                                        placeholder="Enter the Titulo">
                                </div>
                                <div class="form-group">
                                    <label for="content">Contenido</label>
                                    <textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter the content">{{ ($post->tx_content) ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="cover">Imagen Portada</label>
                                    
                                </div>
                                <div class="drop-zone">
                                    <span class="drop-zone__prompt">Arrastra o carga tu archivo aqui</span>                                    
                                    <input type="file" class="form-control drop-zone__input" id="cover" name="cover">
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar publicacion</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/js/util.js') }}"></script>
    <script>
        const form = document.querySelector('#form')
        const method = '{{ $method }}'

        MODEL = {
            store: (form) => {
                let formData = new FormData(form)

                CRUD.sendDataNoJson('store', formData).then((response) => {
                    mostrarMensajeAlerta(response.data.code, response.data.message)
                })
            }
        }

        $(function() {

            init()

            document.querySelector('#form').addEventListener('submit', (e) => {
                e.preventDefault()
                if( method === 'store' ){
                    MODEL.store(form)
                }else if(method === 'update''){
                    console.log('no hay nada')
                }
            })
        })

        function init() {



            document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
                const dropZoneElement = inputElement.closest(".drop-zone");

                dropZoneElement.addEventListener("click", (e) => {
                    inputElement.click();
                });

                inputElement.addEventListener("change", (e) => {
                    if (inputElement.files.length) {
                        updateThumbnail(dropZoneElement, inputElement.files[0]);
                    }
                });

                dropZoneElement.addEventListener("dragover", (e) => {
                    e.preventDefault();
                    dropZoneElement.classList.add("drop-zone--over");
                });

                ["dragleave", "dragend"].forEach((type) => {
                    dropZoneElement.addEventListener(type, (e) => {
                        dropZoneElement.classList.remove("drop-zone--over");
                    });
                });

                dropZoneElement.addEventListener("drop", (e) => {
                    e.preventDefault();

                    if (e.dataTransfer.files.length) {
                        inputElement.files = e.dataTransfer.files;
                        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                    }

                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });
        }
    </script>
@endsection
