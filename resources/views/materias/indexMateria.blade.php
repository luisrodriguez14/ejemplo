@extends('layouts.mi-tema')

@section('contenido')


<h1>
  Aqui estara el listado de materias
</h1>
 
<a href="{{action('MateriaController@create')}}">Nueva materia(action)</a>
<a href="{{route('materia.create')}}"  class="btn btn-success">Nueva materia(route)</a>

@if($materias->count()==0)
  <div class="alert alert-warming">
    No tienes materias registradas
</div>
@else 

<table class='table'>
  <thead>
    <tr>
    <th>Materia</th>
    <th>CRN</th>
    <th>Seccion</th>
    <th>Horario</th>
    <th>Ultima actualizacion</th>

    </tr>
  </thead>
  
  <body>
    
    @foreach($materias as $materia)
    
    <tr>
      
      <td>{{$materia->nombre_materia}}</td>
      <td>{{$materia->crn}}</td>
      <td>{{$materia->seccion}}</td>
      <td>{{$materia->horario}}</td>
      <td>{{$materia->updated_at}}</td>
    </tr>
    
    
    @endforeach
  </body>
  
  
</table>
@endif
@endsection