@extends('layout.admin')

@section('content')

    <form action="{{ url('product')}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="">Nuevo Producto</label>
            <input type="text" name="name" placeholder="Ingrese la profesión a registrar" class="form-control">
        </div>

        <div class="form-group">
        	 <label for="">Precio</label>
            <input type="text" name="price" placeholder="Ingrese precio del producto" class="form-control">
        </div>
        <button type ="submit" class="btn btn-success" >Registrar</button>
    </form>
@endsection
