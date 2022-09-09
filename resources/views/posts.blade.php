@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    @if ($post->image)
                        <h4>Imagen</h4>
                        <img src="{{$post->get_image}}" alt="" class="card-img-top">
                        @endif
                    @if ($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                    @endif
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p clas="card-text">
                        {{ $post->get_excerpt }}
                        <a href="{{ route('post', $post) }}">Leer más</a>
                    </p>
                    <div class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        <p>{{ $post->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
