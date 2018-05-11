<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Materials

    @forelse ($vehicle->containers as $container)
      <h3>{{$container->nom['nom']}}</h3>

      @forelse ($container->material as $material)
        <p>{{$material->material['nom']}}</p>
      @empty

      @endforelse
    @empty

    @endforelse
  </body>
</html>
