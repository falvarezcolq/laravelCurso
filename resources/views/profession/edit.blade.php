@extends('layout.admin') 
@section('content') 
    <form action="{{ url('profession/'.$profession->id) }}" method="POST" > 
        @method('PUT') 
        @csrf 
        <div class="form-group">
            <label for="">Editar profesion</label> 
            <input type="text" name="name" placeholder="Ingrese la profesión a registrar" class="form-control" value="{{ $profession->name }}">
        </div> <button type ="submit" class="btn btn-success" >Editar</button> 
    </form> 
    
    <form action="{{ url('profession/' . $profession->id) }}" method="POST"> 
        @method('DELETE') 
        @csrf 
        <button type="submit" class="btn btn-danger">Eliminar</button> 
    </form> 
@endsection