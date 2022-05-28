@extends('layout')
@section('contenido')
    <div>
        <!--MENSAJE FLASH-->
        @if(session('clientemodificado'))
            <div class="alert alert-success">
                {{ session('clientemodificado') }}
            </div>
        @endif

    <!--VALIDACION DE ERRORES-->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="text-center">MODIFICAR CLIENTE</h2>


        <form action="{{route('edit',$cliente->id)}}" mathod="POST">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIT</label>
                <input type="text" disabled="disabled" class="form-control" value="{{$cliente->id}}" name="id" id="exampleFormControlInput1" placeholder="8472300">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" value="{{$cliente->nombre}}" name="nombre" id="exampleFormControlInput1" placeholder="Maria Castillo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                <input type="text" class="form-control" value="{{$cliente->direccion}}" name="direccion" id="exampleFormControlInput1" placeholder="Col. el INDE">
            </div>

            <div class=" mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Correo</label>
                <input type="text" class="form-control" value="{{$cliente->correo}}" name="correo" id="exampleFormControlInput1" placeholder="Ejemplo@gmail.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numero</label>
                <input type="text" class="form-control" value="{{$cliente->numero}}" name="numero" id="exampleFormControlInput1" placeholder="+502 4742-0000 ">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">MODIFICAR</button>
                <a type="button " href="{{ url('/listar')}}" class="btn btn-danger col-md-3 mt-3 offset float-right">VOLVER </a>

            </div>
        </form>

    </div>
@endsection
