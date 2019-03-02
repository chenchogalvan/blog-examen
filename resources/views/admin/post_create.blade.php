@extends('admin')

@section('content')

<div class="content-wrapper">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Publicar un Post</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Inicio</a></li>
                    <li class="breadcrumb-item active">Publicar un Post</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 mb-30 offset-xl-2">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Basic form</h5>
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Titulo</label>
                            <input type="text" name="title" class="form-control"  aria-describedby="tituloHelp" placeholder="Ej: ¡Como hacer la mejor pizza en asador!">
                            <small id="tituloHelp" class="form-text text-muted">Recuerda escribir un titulo que sea llamativo.</small>
                        </div>

                        <div class="form-group">
                            <label for="cover_path">Imagen de post</label>
                            <input type="file" class="form-control" name="cover_path" aria-describedby="coverHelp" id="cover_path" accept="image/jpeg, image/png">
                            <small id="coverHelp" class="form-text text-muted">Puedes subir una imagen JPG o PNG</small>
                        </div>

                        <div class="form-group">
                            <textarea name="body" id="summernote"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Crear post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection