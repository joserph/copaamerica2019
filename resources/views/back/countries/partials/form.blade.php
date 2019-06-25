
<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado') }}
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>
<div class="form-gruop">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
