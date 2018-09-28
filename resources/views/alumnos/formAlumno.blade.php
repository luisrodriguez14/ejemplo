@extends('layouts.mi-tema')

@section('contenido')

   <form action="{{route('alumno.store')}}" method="POST">
     {{ csrf_field() }}
     
     <label for="nombre">Nombre:</label>
     <input type="text" name="nombre_alumno">
     <br>   
     <label for="codigo">Codigo:</label>
     <input type="text" name="codigo">
     <br>
     <label for="carrera">Carrera:</label>
     <input type="text" name="carrera">
     <br>
     <input type="submit" name="Guardar">
    </form>
  
@endsection