@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <strong>Categoria</strong> {{ $post->category->name }}
                    </div>
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="" class="img-fluid">
                        @endif
                        <p><strong>Nombre</strong> {{ $post->name }}</p>
                        <p><strong>Slug</strong> {{ $post->slug }}</p>
                        <p><strong>Extracto</strong> {!! $post->excerpt  !!} </p>
                        <p><strong>Contenido</strong> {!! $post->body  !!} </p>
                        <p><strong>Estado</strong> {!! $post->status  !!} </p>
                    </div>
                    <div class="card-footer">
                        <strong>Etiquetas</strong>
                        @foreach($post->tags as $tags)
                            <span>{{ $tags->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection