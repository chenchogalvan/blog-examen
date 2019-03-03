@extends('admin')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0"> Lista de etiquetas</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="#" class="default-color">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista de etiquetas</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-statistics mb-10">
                    <div class="card-body">
                        <h5 class="card-title">Lista de etiquetas para publicaciones</h5>
                        <p>Se muestra la lista completa de etiquetas para añadir a las publicaciones. </p>
                        <p>Se pueden crear, editar o eliminar.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-statistics mb-30"> 
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                            </div>
                        @endif
                        <h5 class="card-title">Da clic a una etiqueta para editarla</h5>
                        <form action="{{ route('tags.update', $tag) }}" method="post">
                            @csrf @method('put')

                            <div class="form-group">
                                <label for="tagName">Nombre de la etiqueta</label>
                                <input type="text" class="form-control" id="tagName" aria-describedby="tagName" placeholder="Nombre de la etiquera" name="name" value="{{ old('name', $tag->name) }}">
                                
                                @if ($errors->has('name'))
                                    <small id="tituloHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
                                @else
                                    <small id="tagName">Escribe un nombre claro para la etiqueta.</small>
                                @endif
                            </div>
                            <button  class="btn btn-primary">Actualizar etiqueta</button>
                        </form>
                    </div>
                </div>  
                
            </div>
           
        </div>
    </div>
</div>
@endsection