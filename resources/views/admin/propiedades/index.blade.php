@extends('layouts.template')
	
@section('title')
	index
@endsection

@section('cabecera')
<h1>Propiedades</h1>
@endsection

@section('cuerpo')

<small><table class="table table-responsive">	
  <thead>
    <tr>
      <th>#</th>
      <th>Dirección</th>
      <th>Agua</th>
      <th>Luz</th>
      <th>Bodega</th>
      <th>Estacionamiento</th>
      <th>Comentario</th>
      <th>Estado</th>
    </tr>
  </thead>
  

  <tbody>
  @foreach($propiedades as $propiedad)
    <tr>
      <th scope="row">{{$propiedad->id}}</th>
      <td><a href="corredoras/{{$propiedad->id}}">{{$propiedad->rut}}</a></td>
      <td>{{$propiedad->nombre}}</td>
      <td>{{$propiedad->correo}}</td>
      <td>{{$propiedad->fono}}</td>
      <td>{{$propiedad->comuna->nombre}}</td>
      <td>{{$propiedad->direccion}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $propiedads->links() }}</small>

	
@endsection
