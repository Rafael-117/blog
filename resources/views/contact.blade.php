@extends('plantilla')
@section('title', 'contact')
@section('contenido')

<div class="row center-align container">
    <form class="col s6" method="POST" action="{{ route ('contact')}}">
        @csrf

        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" name="name" type="text" class="validate">
                <label for="first_name">First Name</label>
                {!! $errors->first('name','<small>:message</small><br>') !!}
            </div>
            
            <div class="input-field col s6">
                <input id="last_name" type="text" name="last_name" class="validate">
                <label for="last_name">Last Name</label>
                {!! $errors->first('last_name','<small>:message</small><br>') !!}
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
                {!! $errors->first('password','<small>:message</small><br>') !!}
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input id="email"  name="email" class="validate">
                <label for="email">Email</label>
                {!! $errors->first('email','<small>:message</small><br>') !!}
            </div>
        </div>
        
        <button class="btn waves-effect waves-light" type="submit">Submit
            <i class="material-icons right">send</i>
        </button>
</div>
</form>
</div>

@endsection
