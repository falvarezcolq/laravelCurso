@extends('layout.admin')

@section('content')
    <form action="{{ url('product/'.$product->id) }}" method="POST" >
        @method('PUT')
        @csrf

       <div class="form-group">
            <label for="">Nuevo Producto</label>
            <input type="text" name="name" placeholder="Ingrese la profesión a registrar" class="form-control" value="{{ $product->name }}">
        </div>

        <div class="form-group">
             <label for="">Precio</label>
            <input type="text" name="price" placeholder="Ingrese precio del producto" class="form-control" value="{{ $product->price }}">
        </div>
        <button type ="submit" class="btn btn-success" >Editar</button>
    </form>

    <form action="{{ url('product/' . $product->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    
@endsection
