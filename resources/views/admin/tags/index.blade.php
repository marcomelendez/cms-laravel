@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Listas de etiquetas
                        <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td width="10px">
                                            <a href="{{ route('tags.show',$tag->id) }}" class="btn btn-sm btn-darkcom">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection