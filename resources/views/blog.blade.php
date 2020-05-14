@extends('plantilla')
@section('title', 'blog')
@section('contenido')
                <div class="title m-b-md">
                    {{ $nombre ?? "invitado" }}
                </div>
@endsection