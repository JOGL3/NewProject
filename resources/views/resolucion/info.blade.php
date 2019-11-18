<div class="modal fade" id="modal-info-{{$rs->re_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#000;">
        <h5 class="modal-tittle">codigo: {{$rs->codigo}}</h5>
      </div>
      <div class="modal-body" style="background-color:#000;">
        <label class="form-control">nombre: {{$rs->estudiante}}</label>
        <label class="form-control">carrera: {{$rs->presidente}}</label>
        <label class="form-control">siglas: {{$rs->secretario}}</label>
        <label class="form-control">created_at: {{ Carbon\Carbon::parse($rs->created_at)->format('Y-m-d') }}</label>
     
      </div>
      <div class="modal-footer" style="background-color:#000;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
