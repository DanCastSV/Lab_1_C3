@extends('layouts.app')

@section('template_title')
    {{ $profesore->name ?? "{{ __('Show') Profesore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Profesore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesore.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $profesore->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $profesore->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $profesore->Dui }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $profesore->Edad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
