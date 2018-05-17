@extends('layout.admin')
@section('content') 
    <form action="{{ url('profession')}}" method="POST" > 
        @csrf 
        <div class="form-group"> 
            <label for="">Nueva profesión</label> 
            <input type="text" name="name" placeholder="Ingrese la profesión a registrar" class="form-control">
        </div> <button type ="submit" class="btn btn-success" >registrar</button> 
    </form> 
    
@endsection