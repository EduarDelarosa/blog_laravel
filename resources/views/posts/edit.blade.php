@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Titulo *</label>
                            <input type="text" name="title" class="form-control" placeholder="Titulo" value="{{ old('title', $post->title) }}" required>
                        </div>
                        <div class="input-group my-3">
                            <input type="file" class="form-control" id="imgInput" name="file">
                            <label class="input-group-text" for="imgInput">Cargar imagen</label>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido embebido</label>
                            <textarea name="iframe" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
