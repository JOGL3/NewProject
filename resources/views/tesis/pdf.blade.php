
<!DOCTYPE html>
<html lang="en">
@foreach($tesis as $ts)
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>INFORME N°  </title>
    <style>
      .page-break {
          page-break-after: always;
      }
    </style>
  </head>
  <body>
  
    <div class="header-wrapper">
      <div class="text-center">
        <img src="{{ asset('images/ucvlogo.png') }}">
      </div>
    </div>
    <section>
   
      <div class="row">
        <div class="col-xs-6">
          <p>PARA : Dra Antonieta Pilar Jiménez Berrú 
          <br>Cargo : Directora Académica - Filial Callao</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-xs-6">
          <p>De : Mgrt . Even Deyser Pérez Rojas <br>Cargo : Coordinador de Escuela Profesional De Sistemas</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <p>Asunto : "Completar Campo"</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <p>Fecha : {{ Carbon\Carbon::parse($ts->created_at)->format('Y-m-d') }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <p>____________________________________________________________________________________________</p>
        </div>
      </div>
      <div class="row">
        <div class="center">
          <p>Es grato dirigirme a Usted para saludarla y a la vez solicitar resolución para la designación de integrantes del grupo de interés,
             documento que está siendo solicitado por el área de Dirección de Evaluación, Acreditación y Certificación de Trujillo según cronograma
             de autoevaluación 2019, aprobado por resolución N° 0166-2019-UCV.<br><br>Para el cumplimiento requerido, los integrantes estará conformado por los siguientes huevones:<br></p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-xs-4" style="text-align:center;"> 
          <table class="table-bordered text-center" style="text-align:center;">
            <caption>DOCUMENTACIÓN:</caption>
            <tr>
              <td style="width:180px;">CODIGO</td>
              <td style="width:180px;">NOMBRE</td>
              <td style="width:180px;">ESCUELA</td>
              <td style="width:180px;">SIGLAS</td>
              
            </tr>
            <tr>
            <td>{{$ts->codigo}}</td>
            <td>{{$ts->nombre}}</td>
            <td>{{$ts->carrera}}</td>
            <td>{{$ts->siglas}}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
        </div>
    </section><br>
    <div class="row">
        <div class="center">
          <p>Es todo lo que tengo que informar para los fines pertinentes. Me valgo de la ocasión para retirarle las muestras de mi especial y estima personal </p>
        </div>
      </div><br><br>
      <div class="row">
        <div class="center">
          <p>Atentamente , </p>
        </div>
      </div>
      <div class="row">
        <div class="center">
          
          <p class="center"> __________________________<br> Mgtr. Even Deyser Pérez Rojas <br> Coordinador Académico de Escuela Profesional de Ingeniería de Sistemas <br> Filial-Callao</p>
        </div>
      </div>
       
    </section>
    <div class="page-break"></div>
    @endforeach
  </body>
</html>
