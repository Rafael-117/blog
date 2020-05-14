@extends('plantilla')
@section('title', 'test')
@section('contenido')
                <div class="title m-b-md">
                    {{ $nombre ?? "invitado" }}
                </div>
@endsection