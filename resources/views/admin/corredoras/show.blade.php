@extends('layouts.template')
	
@section('title')
	index
@endsection

@section('cuerpo')

<div class="">
  <p>{{$estudio->nombre}}</p>
  @foreach($estudio->usuarios as $usuario)
  <ul>
    <li>{{$usuario->nombre}}</li>
  </ul>
  @endforeach
</div>


@endsection