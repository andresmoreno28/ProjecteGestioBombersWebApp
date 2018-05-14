<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @php
    $codi=$vehicle->codigo();
      $x=$vehicle->createTextImage($codi);
      $ruta="\img\x.png";
      QrCode::size(300);
    @endphp
    <div class="container">
      <img onclick="window.print()" src="data:image/png;base64,{!! base64_encode(QrCode::encoding('UTF-8')->errorCorrection('H')->format('png')->size(900)->merge(asset('img/x.png'), .3, true)->generate(url('vehicle/material/'.$vehicle['id'])))!!} ">

    </div>

  </body>
</html>
