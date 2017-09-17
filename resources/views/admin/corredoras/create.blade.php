@extends('layouts.template')

 
@section('titulo','calendario')


 
@section('cuerpo')
@include('partials.chile')



@endsection

@section('scripts')
<script src="{{asset('js/utilidades.js')}}"></script>

@endsection