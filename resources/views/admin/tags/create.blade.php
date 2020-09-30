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
                        {!! Form::open(['route'=>'tags.store']) !!}
                            @include('admin.tags.partials.field')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection