<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_prestamos') }}
            {{ Form::text('id_prestamos', $devolucione->id_prestamos, ['class' => 'form-control' . ($errors->has('id_prestamos') ? ' is-invalid' : ''), 'placeholder' => 'Id Prestamos']) }}
            {!! $errors->first('id_prestamos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion_real') }}
            {{ Form::text('fecha_devolucion_real', $devolucione->fecha_devolucion_real, ['class' => 'form-control' . ($errors->has('fecha_devolucion_real') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion Real']) }}
            {!! $errors->first('fecha_devolucion_real', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>