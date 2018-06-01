@extends('layout.admin')


@section('content')

    <table class="table">
        <thead>
            <th>#</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                <a href="{{ url('product/'.$product->id.'/edit') }}" class="btn btn-primary">Editar Producto</a>
                </td>
            </tr>
            @endforeach
        </tbody>  
    </table>
@endsection

