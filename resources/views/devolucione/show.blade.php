@extends('layouts.app')

@section('template_title')
    {{ $devolucione->name ?? "{{ __('Show') Devolucione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Devolucione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('devoluciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Prestamos:</strong>
                            {{ $devolucione->id_prestamos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion Real:</strong>
                            {{ $devolucione->fecha_devolucion_real }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
