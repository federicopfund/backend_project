@extends('base')
@section('title') About @endsection
@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"{{ "About" }}</h1>
</div>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-primary" aria-current="page" href="{{ route("About.create") }}"> + Nuevo</a>
          </li>
        </ul>
        <form action="{{route("About.search")}}" method="POST"  class="d-flex">
          {{ csrf_field() }}
          <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div>
      <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($abouts as $about)
              <tr>
                  <th scope="row">{{ $about->id }}</th> 
                  <td>{{ $about->name }}</td>
                  <td>{{ $about->email }}</td>
                  <td>{{ $about->phone }}</td>
                  <td>{{ $about->message }}</td>
                  <td style="display: flex" >
                    <a href="{{ route("About.edit",$about->id) }}" class="btn btn-sm btn-primary" style = "margin-right: 10px" >Edit</a>
                    <form action="{{ route("About.destroy",$about->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field("DELETE") }}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este registro?')">Delete</button>
                    </form>
                  </td>  
              </tr>
              @endforeach
            </tbody>
      </table>
  </div>

    
@endsection
