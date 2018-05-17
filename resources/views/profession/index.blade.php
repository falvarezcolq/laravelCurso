@extends('layout.admin')

@section('content') 
  <table class="table">
   <thead> 
        <th>#</th>
        <th>Profesión</th> 
        <th>Acción</th>
   </thead>
   <tbody> 
  
    @foreach($professions as $profession) 
        <tr> 
            <td>{{ $profession->id}}</td> 
            <td>{{ $profession->name }}</td> 
            <td> <a href="profession/{{ $profession->id }}/edit" class="btn btn-primary">Editar</a> </td>
        </tr>
    @endforeach 

    </tbody>
   </table> 
@endsection