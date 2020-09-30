@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h1>Lista de articulos</h1>

            @foreach($posts as $post)
                <div class="card mt-3">
                    <div class="card-header">
                        <a href="#">{{ $post->category->name }}</a>
                    </div>
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="" class="img-fluid">
                        @endif
                        {{ $post->excerpt }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('posts',$post->slug) }}" class="float-right">Leer mas</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection