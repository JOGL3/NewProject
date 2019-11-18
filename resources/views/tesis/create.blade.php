@extends('layouts.app', ['page' => __('Gestión Tesis'), 'pageSlug' => 'tesis'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Registro de documento') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('tesis.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tesis.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Información de Documentación') }}</h6>
                            <div class="pl-lg-4">
                            <div class="col-xl-1 col-md-1 ">
                                    <label class="form-control-label" for="input-codigo">{{ __('Codigo') }}</label>
                                    <input type="text" name="codigo" id="input-codigo" class="form-control form-control-alternative{{ $errors->has('codigo') ? ' is-invalid' : '' }}" placeholder="{{ __('codigo') }}" value="{{ old('codigo') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'codigo'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                    <input type="text" name="nombre" id="input-nombre" maxlength="20"class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('nombre') }}" value="{{ old('nombre') }}" required>
                                    @include('alerts.feedback', ['field' => 'nombre'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-carrera">{{ __('Carrera') }}</label>
                                    <input type="text" name="carrera" id="input-carrera" maxlength="20"class="form-control form-control-alternative{{ $errors->has('carrera') ? ' is-invalid' : '' }}" placeholder="{{ __('carrera') }}" value="{{ old('carrera') }}" required>
                                    @include('alerts.feedback', ['field' => 'carrera'])
                                </div>
                                <div class="col-xl-2 col-md-2 ">
                                    <label class="form-control-label" for="input-siglas">{{ __('Siglas') }}</label>
                                    <input type="text" name="siglas" id="input-siglas" maxlength="9"class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('siglas') }}" value="{{ old('siglas') }}" required>
                                    @include('alerts.feedback', ['field' => 'siglas'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label for="">Seleccione Documento</label>
                                    <input type="file" name="documento" >
                                </div>    
                               

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Registrar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
