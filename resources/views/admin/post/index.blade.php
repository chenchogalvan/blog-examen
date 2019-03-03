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
            <div class="col-xl-4">
                <div class="card card-statistics mb-50">
                    <div class="card-body">
                        <p>Se muestra una list de post creados solo por el usuario autenticado, mostrando <b>Titulo</b>, <b>Slug</b>, y <b>Fecha de creación</b> con algunas acciones basicas como <b>ver</b>, <b>editar</b>, y <b>eliminar</b>.</p>
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
                                <h4 class="text-white">{{ count($post) }}</h4>
                                <p class="card-text text-white">Publicaciones creadas por el usuario</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                    </div>
                @endif
                <div class="card card-statistics h-100"> 
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table center-aligned-table mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th style="width:200px;">Titulo</th>
                                        <th style="width:200px;">Slug</th>
                                        <th style="width:200px;">Fecha de creación</th>
                                        <th style="width:200px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->slug }}</td>
                                            <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                            <td >
                                                    <a class="btn btn-success mb-10" href="{{ route('posts.show', $post->slug) }}">Ver</a> 
                                                    <a class="btn btn-warning mb-10" href="{{ route('posts.edit', $post->slug) }}">Editar</a>  
                                                <form action="{{ route('posts.destroy', $post) }}" method="post" style="display:inline-block;">
                                                    @method('DELETE') @csrf
                                                    <button class="btn btn-danger">Eliminar</button> 
                                                </form>
                                            </td>
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
    <div class="row">   
        <div class="col-xl-12 mb-30">     
            
        </div>
    </div>
</div>
@endsection