@extends('layouts.app', ['page' => __('Gestión Tesis'), 'pageSlug' => 'tesis'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Tesis Registrados recordar pdfs') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                       
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')
                    
                    <div class="table-responsive">
                     <table class="table table-hover table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead class=" text-primary">
                            <script>
                            function nav(value) {
                            if (value != "") { location.href = value; }
                            }
                            </script>
                                <th scope="col">{{ __('Código') }}</th>
                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Escuela') }}</th>
                                <th scope="col">{{ __('Siglas') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col">{{ __('Opciones') }}</th>
                                <div class="col-xl-3 col-md-6">
                                
                                <select onChange=nav(this.value) name=combo1 class=menudespl width="200">
                                <OPTION value="tesis">Selecciona un destino</OPTION>
                                <OPTION value="tesis/create">Tesis</OPTION>
                                <OPTION value="resolucion/create">Resolucion</OPTION>
                            </thead>
                            <tbody>
                            @foreach($tesis as $ts)
                            <tr>
                            <td>{{$ts->codigo}}</td>
                            <td>{{$ts->nombre}}</td>
                            <td>{{$ts->carrera}}</td>
                            <td>{{$ts->siglas}}</td>
                            <td>{{ Carbon\Carbon::parse($ts->created_at)->format('Y-m-d') }}</td>
                            <td>
                            <a  data-toggle="modal" data-target="#modal-info-{{$ts->id}}" class="btn btn-info btn-sm" href="">Modal datos</a>
                            @include('tesis.info')
                            <a href="{{ route('stream') }}" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>mostrar</a>
                            <a href="{{ route('descargar') }}" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>descargar</a>
                            
                            </td>
                          </tr>
                  @endforeach
                   
                    </body>
                    </table>
                </div>
              
                    
                </div>
            </div>
        </div>
    </div>
@endsection




















