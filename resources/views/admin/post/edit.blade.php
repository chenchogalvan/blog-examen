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
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Titulo</label>
                            
                            <input type="text" name="title" value="{{ old('title', $post->title) }}"  class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"  aria-describedby="tituloHelp" placeholder="Ej: ¡Como hacer la mejor pizza en asador!">
                            @if ($errors->has('title'))
                                <small id="tituloHelp" class="form-text text-danger">{{ $errors->first('title') }}</small>
                            @else
                                <small id="tituloHelp" class="form-text text-muted">Recuerda escribir un titulo que sea llamativo.</small>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="cover_path">Imagen de publicación</label>
                            <input type="file" class="form-control" name="cover_path" aria-describedby="coverHelp" id="cover_path" accept="image/jpeg, image/png">
                            @if ($errors->has('cover_path'))
                                <small id="coverHelp" class="form-text text-danger">{{ $errors->first('cover_path') }}</small>
                            @else
                                <small id="coverHelp" class="form-text text-muted">Puedes subir una imagen JPG o PNG</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tags">Etiquetas para la publicación</label>
                            <select class="form-control js-example-basic-multiple " name="tags[]" multiple="multiple">
                                @foreach ($tags as $tag)
                                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tags'))
                                <small id="tagHelp" class="form-text text-danger">{{ $errors->first('tags') }}</small>
                            @else
                                <small id="tagHelp" class="form-text text-muted">Selecciona las etiquetas que vayan relacionadas con tu publicación</small>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <textarea name="body" id="summernote">{{ old('body', $post->body) }}</textarea>
                            @if ($errors->has('body'))
                                <small id="tagHelp" class="form-text text-danger">{{ $errors->first('body') }}</small>
                            @endif
                        </div>
                        

                        <button type="submit" class="btn btn-success">Crear publicación</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection