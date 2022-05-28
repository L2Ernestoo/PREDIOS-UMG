@extends('layout')
@section('contenido')
    <div >
        <!--MENSAJE FLASH-->
        @if(session('parqueoguardado'))
            <div class="alert alert-success">
                {{ session('parqueoguardado') }}
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



        <form action="{{route('save')}}" mathod="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card bg-light border-primary ">
                        <div class="card card-default">

                            <div class="card-header text-center text-white bg-primary"><h2 class="text-center"> NUEVO CABEZAL <i class="fas fa-truck"></i> </h2> </div>
                                <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">No. Placa</label>
                                                <input type="text" class="form-control" name="placa" id="exampleFormControlInput1" placeholder="8472300">
                                            </div>
                                            <div class="col mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Maria Castillo">
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                                                <input type="date" class="form-control" name="fecha" id="exampleFormControlInput1" placeholder="Col. el INDE">
                                            </div>

                                            <div class="col mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hora</label>
                                                <input type="time" class="form-control" name="hora" id="exampleFormControlInput1" placeholder="Ejemplo@gmail.com">
                                            </div>
                                        </div>

                                        <div class="row g-3">

                                            <div class="col mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Servicio</label>
                                                <select   class="form-select" name="service_id" id="exampleFormControlInput1">
                                                    @foreach( $servicio as $servicios)
                                                        <option value="{{$servicios->id_service}}"> {{$servicios->servicio}}   </option>
                                                    @endforeach
                                                </select>


                                            </div>
                                        </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">INGRESAR <i class="fas fa-save"></i></button>
                                                <a type="button " href="{{ url('/listar-Predio')}}" class="btn btn-danger col-md-3 mt-3 offset float-right">CANCELAR <i class="fas fa-times"></i> </a>

                                            </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
