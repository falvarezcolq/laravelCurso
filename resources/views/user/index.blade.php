@extends('layout.admin')

@section('content') 
  <table class="table">
   <thead> 
        <th>#</th>
        <th>Nombre</th>
        <th>Profesión</th> 
        <th>Acción</th>
   </thead>
   <tbody> 
  
    @foreach($users as $user) 
        <tr> 
            <td>{{ $user->id}}</td> 
            <td>{{ $user->name }}</td> 
            <td>{{ $user->profession->name}}</td>
            <td> <a href="user/{{ $user->id }}/edit" class="btn btn-primary">Editar</a> </td>
        </tr>
    @endforeach 

    </tbody>
   </table> 
@endsection