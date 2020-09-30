<div class="form-group">
    {!! Form::label('name','Nombre de la categoria') !!}
    {!! Form::text('name',null,['class'=>'form-control','id'=>'name']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug','URL amigable') !!}
    {!! Form::text('slug',null,['class'=>'form-control','id'=>'slug']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','Descripcion') !!}
    {!! Form::textarea('body',null,['class'=>'form-control','id'=>'body']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) !!}
</div>

@section('scripts')


    <!-- Dependency SpeakingURL -->
    <script type="text/javascript" src="{{ asset('vendor/stringToSlug/speakingurl.min.js') }} "></script>
    <!-- stringToSlug -->
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#name, #slug").stringToSlug({
                callback: function(text) {
                    $('#slug').val(text);
                }
            })
        });
    </script>
@endsection