<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Materials

    @forelse ($vehicle->containers as $container)
      <h3>{{$container->name}}</h3>
      @forelse ($container->materials as $material)
        <p>{{$material['nom']}}</p>
      @empty

      @endforelse
    @empty

    @endforelse
  </body>
</html>
