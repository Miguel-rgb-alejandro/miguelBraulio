<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_libro') }}
            {{ Form::text('id_libro', $prestamo->id_libro, ['class' => 'form-control' . ($errors->has('id_libro') ? ' is-invalid' : ''), 'placeholder' => 'Id Libro']) }}
            {!! $errors->first('id_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $prestamo->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_prestamo') }}
            {{ Form::text('fecha_prestamo', $prestamo->fecha_prestamo, ['class' => 'form-control' . ($errors->has('fecha_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Prestamo']) }}
            {!! $errors->first('fecha_prestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion') }}
            {{ Form::text('fecha_devolucion', $prestamo->fecha_devolucion, ['class' => 'form-control' . ($errors->has('fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion']) }}
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>