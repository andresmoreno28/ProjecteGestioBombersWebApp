<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {!! QrCode::size(300)->generate(url('vehicle/material/'.$vehicle['id'])); !!}
  </body>
</html>
