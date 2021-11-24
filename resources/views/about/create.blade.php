@extends('base')
@section('title') About Create @endsection
@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"{{ "About Create" }}</h1>
</div>
<form action="{{ route("About.store")}}" method="post">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" id="name" class="form-control" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="email">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Telefono</label>
        <input type="phone" id="phone" class="form-control" placeholder="phone">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Mensaje</label>
        <input type="message" id="message" class="form-control" placeholder="message">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
   
</form>

    
@endsection
