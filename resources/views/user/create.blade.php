@extends('layout.admin')
@section('content')
     <form action="{{ url('user') }}" method="POST" >
        
        <h1>CREAR USUARIO</h1>

         @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name ="name" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" name ="last_name" class="form-control" >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name ="email" class="form-control"  >
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name ="password" class="form-control">
        </div>

         <div class="form-group">
            <label for="">Profesión</label>
            <select name="profession_id" id="profession_id" class="form-control">
                <option value="1">Arquitecto</option>
            </select>
        </div>
        <input type="submit"  class="btn btn-success">
    </form>
@endsection


@section('scripts')
<script src="{{ asset('asset/dist/js/user.create.js') }}"></script>
@endsection