@extends('layouts.mi-tema')

@section('contenido')

   <form action="{{route('materia.store')}}" method="POST">
     {{ csrf_field() }}
     
     <label for="materia">Materia:</label>
     <input type="text" name="nombre_materia">
     <br>   
     <label for="nrc">NRC:</label>
     <input type="text" name="nrc">
     <br>
     <label for="seccion">Sección:</label>
     <input type="text" name="seccion">
     <br>
     <label for="horario">Horario:</label>
     <input type="time" name="horario">
     <br>
     <input type="submit" name="Guardar">
    </form>
  
@endsection