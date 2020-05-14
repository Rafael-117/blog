@extends('plantilla')
@section('title', 'inicio')
@section('contenido')
                <div class="title m-b-md">
                    {{ $nombre ?? "invitado" }}
                    {{ "hola" }}
                </div>        
@endsection
