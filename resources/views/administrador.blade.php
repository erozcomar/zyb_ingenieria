@extends('plantilla')

@section('seccion')

<h1>Consultas</h1>

@foreach($preguntas as $pregunta)

      <a href= {{ route('admin', $pregunta) }} class='bg-warning'>{{ $pregunta }}</a><br>

@endforeach

@if(!empty($id))

@switch($id)

@case($id == 'madera')

<h1 class='mt-5'>solo disponemos stock de {{$id}}</h1 >
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non eveniet id eligendi magnam qui ipsa deserunt facere, accusantium illum esse rem exercitationem fugiat doloribus? Eos deleniti id dicta saepe repellendus.</p>

@break

@case($id == 'papel')

<h1 class='mt-5'>solo disponemos stock de {{$id}}</h1 >
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non eveniet id eligendi magnam qui ipsa deserunt facere,
    accusantium illum esse rem exercitationem fugiat doloribus? Eos deleniti id dicta saepe repellendus.</p>

@break

@case($id == 'pino')

<h1 class='mt-5'>solo disponemos stock de {{$id}}</h1 >
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non eveniet id eligendi magnam qui ipsa deserunt facere,
    accusantium illum esse rem exercitationem fugiat doloribus? Eos deleniti id dicta saepe repellendus.</p>

@break

@endswitch


@endif

<!-- ejemplo de tabla sacada de bootstrapp -->

<!-- <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

@endsection