<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @php
    $codi=$vehicle->codi();
      $x=$vehicle->createTextImage($codi);
      $ruta="\img\x.png";
      QrCode::size(300);
    @endphp
    <img src="data:image/png;base64,{!! base64_encode(QrCode::encoding('UTF-8')->errorCorrection('H')->format('png')->size(900)->merge(asset('img/x.png'), .3, true)->generate(url('vehicle/material/'.$vehicle['id'])))!!} ">
  </body>
</html>
