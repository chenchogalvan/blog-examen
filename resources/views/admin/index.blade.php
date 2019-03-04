@extends('admin')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0"> Lista de Post</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="#" class="default-color">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista de Post</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-statistics mb-50">
                    <div class="card-body">
                        <p>Se muestra una list de post creados por todos los usuarios, mostrando <b>Titulo</b>, <b>Slug</b>, y <b>Autor</b>. Dando clic en el slug se puede lleva a la publicación fuera del admin. </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card card-statistics">
                    <div class="card-body bg-dark">
                        <div class="clearfix">
                            <div class="float-left icon-box bg-danger">
                                <span class="text-white">
                                <i class="fa fa-hashtag highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <h4 class="text-white">{{ count($posts) }}</h4>
                                <p class="card-text text-white">Publicaciones creadas por el usuario</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-statistics mt-10">
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
        </div>
        <div class="row">

            <div class="col-xl-12 mt-30">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card card-statistics h-100"> 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table center-aligned-table mb-0">
                                        <thead>
                                            <tr class="text-dark">
                                                <th style="width:200px;">Titulo</th>
                                                <th style="width:200px;">Slug</th>
                                                <th style="width:200px;">Autor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $post->title }}</td>
                                                    <td><a href="{{ route('index.show',$post->slug) }}" target="_blank" class="btn btn-link">{{ $post->slug }}</a></td>
                                                    <td>{{ $post->user->name.' '. $post->user->last_name }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
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
    </div>
</div>
@endsection