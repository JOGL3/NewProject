@extends('layouts.app', ['page' => __('Gestión Resolución'), 'pageSlug' => 'resolucion'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Resoluciones Registradas') }}</h4>
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
                                <th scope="col">{{ __('Estudiante') }}</th>
                                <th scope="col">{{ __('Presidente') }}</th>
                                <th scope="col">{{ __('Secretario') }}</th>
                                <th scope="col">{{ __('Vocal') }}</th>
                                <th scope="col">{{ __('Lugar') }}</th>
                                <th scope="col">{{ __('Hora') }}</th>
                                <th scope="col">{{ __('Fecha') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col">{{ __('Opciones') }}</th>
                                <div class="col-xl-3 col-md-6">
                                
                                <select onChange=nav(this.value) name=combo1 class=menudespl width="200">
                                <OPTION value="resolucion">Selecciona un destino</OPTION>
                                <OPTION value="tesis/create">Tesis</OPTION>
                                <OPTION value="resolucion/create">Resolucion</OPTION>
                            </thead>
                            <tbody>
                            @foreach($resolucion as $rs)
                            <tr>
                            <td>{{$rs->codigo}}</td>
                            <td>{{$rs->estudiante}}</td>
                            <td>{{$rs->presidente}}</td>
                            <td>{{$rs->secretario}}</td>
                            <td>{{$rs->vocal}}</td>
                            <td>{{$rs->lugar}}</td>
                            <td>{{$rs->hora}}</td>
                            <td>{{$rs->fecha}}</td>
                            <td>{{ Carbon\Carbon::parse($rs->created_at)->format('Y-m-d') }}</td>
                            <td>
                            <a  data-toggle="modal" data-target="#modal-info-{{$rs->re_id}}" class="btn btn-info btn-sm" href="">Modal datos</a>
                            @include('resolucion.info')
                            <a href="{{ route('rstream') }}" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>mostrar</a>
                            <a href="{{ route('rdescargar') }}" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>descargar</a>
                            
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















