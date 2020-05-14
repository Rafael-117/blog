@extends('plantilla')
@section('title', 'inicio')
@section('contenido')
                <div class="title m-b-md">
                    {{ $nombre ?? "invitado" }}
                </div>             
@endsection
