@extends('layouts.mi-tema')

@section('contenido')


<h1>
  Aqui estara el listado de alumnos
</h1>
 
<a href="{{action('AlumnoController@create')}}">Nueva materia(action)</a>
<a href="{{route('alumno.create')}}"  class="btn btn-success">Nuevo alumno(route)</a>

@if($alumnos->count()==0)
  <div class="alert alert-warming">
    No tienes alumnos registrados
</div>
@else 

<table class='table'>
  <thead>
    <tr>
    <th>Nombre</th>
    <th>Codigo</th>
    <th>Carrera</th>
    <th>Ultima actualizacion</th>

    </tr>
  </thead>
  
  <body>
    
    @foreach($alumnos as $alumno)
    
    <tr>
      
      <td>{{$alumno->nombre_alumno}}</td>
      <td>{{$alumno->codigo}}</td>
      <td>{{$alumno->carrera}}</td>
      <td>{{$alumno->updated_at}}</td>
    </tr>
    
    
    @endforeach
  </body>
  
  
</table>
@endif
@endsection