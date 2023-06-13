@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? "{{ __('Show') Prestamo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Libro:</strong>
                            {{ $prestamo->id_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $prestamo->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Prestamo:</strong>
                            {{ $prestamo->fecha_prestamo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion:</strong>
                            {{ $prestamo->fecha_devolucion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
