@extends('plantilla')
@section('title', 'about')
@section('contenido')

<div class="title m-b-md">
    {{ $nombres ?? "invitado" }}
</div>


<ul class="collapsible">
    @forelse ($nombre as $nombreItem)
    <li>
        <div class="collapsible-header">
            <i class="material-icons">filter_drama</i> {{ $nombreItem['title']}}
            <span class="new badge">0</span>
        </div>
    </li>
        @empty
    <h1>arreglo vacio</h1>
    @endforelse
</ul>
@endsection
