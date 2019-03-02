@extends('admin')

@section('content')

<div class="content-wrapper">
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
        <div class="col-xl-12 mb-30">     
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
                                    <th>Titulo</th>
                                    <th>Slug</th>
                                    <th>Extracto</th>
                                    <th>Fecha de creación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td>{!! str_limit($post->body, 250) !!}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td><button type="button" class="btn btn-warning">Editar</button>  <button type="button" class="btn btn-danger">Eliminar</button> </td>
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
@endsection