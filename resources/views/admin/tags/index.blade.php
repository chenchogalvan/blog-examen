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
                <div class="card card-statistics">
                    <div class="card-body bg-dark">
                        <div class="clearfix">
                            <div class="float-left icon-box bg-danger">
                                <span class="text-white">
                                <i class="fa fa-hashtag highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <h4 class="text-white">{{ count($tags) }}</h4>
                                <p class="card-text text-white">Etiquetas en el sistema</p>
                            </div>
                        </div>
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
                        <div class="scrollbar max-h-200">
                            <div class="table-responsive mt-15">
                                <table class="table center-aligned-table mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th>Nombre de la etiqueta</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($tags as $tag)
                                        <tr>
                                            <td><a href="{{ route('tags.edit', $tag->id) }}">{{ $tag->name }}</a> </td>
                                            <td><a class="btn btn-warning btn-sm" href="{{ route('tags.edit', $tag->id) }}">Editar</a></td>
                                            <td><form style="display:inline;" action="{{ route('tags.destroy', $tag) }}" method="post">@csrf @method('DELETE')<button class="btn btn-danger btn-sm">Clic aquí para Eliminar</button></form></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
                
            </div>
           
        </div>
    </div>
</div>
@endsection