@extends('admin')

@section('content')

<div class="content-wrapper">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Publicación {{ $post->title }}</h4>
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
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        </div>
                    @endif
                    <h5 class="card-title">{{ $post->title }}<br>
                    <small>Autor: <b>{{ $post->user->name.' '. $post->user->last_name }}</b></small> <small>| Etiquetas: {{ $post->tags->pluck('name')->implode(', ') }}</small>
                    </h5>

                    <img src="{{ Storage::url($post->cover_path) }}" alt="" class="img-fluid mb-20">

                    {!! $post->body !!}
                    <a class="btn btn-warning" href="{{ route('posts.edit', $post->slug) }}">Editar</a>  
                    <form action="{{ route('posts.destroy', $post) }}" method="post" style="display:inline;">
                        @method('DELETE') @csrf
                        <button class="btn btn-danger">Eliminar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection