@extends('layouts.template')
	
@section('title')
	index
@endsection

@section('cabecera')
<h1>Corredoras</h1>
@endsection


@section('cuerpo')

<small><table class="table table-responsive">	
  <thead>
    <tr>
      <th>#</th>
      <th>Rut</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Teléfono</th>
      <th>Comuna</th>
      <th>Dirección</th>
    </tr>
  </thead>
  

  <tbody>
  @foreach($corredoras as $corredora)
    <tr>
      <th scope="row">{{$corredora->id}}</th>
      <td><a href="corredoras/{{$corredora->id}}">{{$corredora->rut}}</a></td>
      <td>{{$corredora->nombre}}</td>
      <td>{{$corredora->correo}}</td>
      <td>{{$corredora->fono}}</td>
      <td>{{$corredora->comuna->nombre}}</td>
      <td>{{$corredora->direccion}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $corredoras->links() }}</small>

	
@endsection
