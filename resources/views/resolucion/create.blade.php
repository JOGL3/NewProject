@extends('layouts.app', ['page' => __('Gestión Resolución'), 'pageSlug' => 'resolucion'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Registro de Resolución') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('resolucion.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('resolucion.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Información de Documentación') }}</h6>
                            <div class="pl-lg-4">
                            <div class="col-xl-1 col-md-1 ">
                                    <label class="form-control-label" for="input-codigo">{{ __('Codigo') }}</label>
                                    <input type="text" name="codigo" id="input-codigo" class="form-control form-control-alternative{{ $errors->has('codigo') ? ' is-invalid' : '' }}" placeholder="{{ __('codigo') }}" value="{{ old('codigo') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'codigo'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-estudiante">{{ __('Estudiante') }}</label>
                                    <input type="text" name="estudiante" id="input-estudiante" maxlength="20"class="form-control form-control-alternative{{ $errors->has('estudiante') ? ' is-invalid' : '' }}" placeholder="{{ __('estudiante') }}" value="{{ old('estudiante') }}" required>
                                    @include('alerts.feedback', ['field' => 'estudiante'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-presidente">{{ __('Presidente') }}</label>
                                    <input type="text" name="presidente" id="input-presidente" maxlength="20"class="form-control form-control-alternative{{ $errors->has('presidente') ? ' is-invalid' : '' }}" placeholder="{{ __('presidente') }}" value="{{ old('presidente') }}" required>
                                    @include('alerts.feedback', ['field' => 'presidente'])
                                </div>
                                <div class="col-xl-2 col-md-2 ">
                                    <label class="form-control-label" for="input-secretario">{{ __('Secretario') }}</label>
                                    <input type="text" name="secretario" id="input-secretario" maxlength="9"class="form-control form-control-alternative{{ $errors->has('secretario') ? ' is-invalid' : '' }}" placeholder="{{ __('secretario') }}" value="{{ old('secretario') }}" required>
                                    @include('alerts.feedback', ['field' => 'secretario'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-vocal">{{ __('Vocal') }}</label>
                                    <input type="text" name="vocal" id="input-vocal" maxlength="20"class="form-control form-control-alternative{{ $errors->has('vocal') ? ' is-invalid' : '' }}" placeholder="{{ __('vocal') }}" value="{{ old('vocal') }}" required>
                                    @include('alerts.feedback', ['field' => 'vocal'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-lugar">{{ __('Lugar') }}</label>
                                    <input type="text" name="lugar" id="input-lugar" maxlength="20"class="form-control form-control-alternative{{ $errors->has('lugar') ? ' is-invalid' : '' }}" placeholder="{{ __('lugar') }}" value="{{ old('lugar') }}" required>
                                    @include('alerts.feedback', ['field' => 'lugar'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-hora">{{ __('Hora') }}</label>
                                    <input type="text" name="hora" id="input-hora" maxlength="20"class="form-control form-control-alternative{{ $errors->has('hora') ? ' is-invalid' : '' }}" placeholder="{{ __('hora') }}" value="{{ old('hora') }}" required>
                                    @include('alerts.feedback', ['field' => 'hora'])
                                </div>
                                <div class="col-xl-2 col-md-2">
                                    <label class="form-control-label" for="input-fecha">{{ __('Fecha') }}</label>
                                    <input type="date" name="fecha" id="input-fecha" maxlength="20"class="form-control form-control-alternative{{ $errors->has('fecha') ? ' is-invalid' : '' }}" placeholder="{{ __('fecha') }}" value="{{ old('fecha') }}" required>
                                    @include('alerts.feedback', ['field' => 'fecha'])
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
