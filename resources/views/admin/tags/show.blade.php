@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Crear de etiquetas
                    </div>
                    <div class="card-body">
                        <p><strong>Nombre</strong> {{ $tag->name }}</p>
                        <p><strong>Slug</strong> {{ $tag->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection