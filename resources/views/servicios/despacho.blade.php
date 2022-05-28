@extends('layout')
@section('title', 'Despachos - La Bendicion')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">DESPACHO</h3>
    </div>
    <div class="container shadown-sm rounded p-4">
        <form method="post" action="{{route('store.despacho')}}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="Naviera">NUMERO SERVICIO</label>
                    <select class="form-select" aria-label="Default select example" name="numero_servicio" required>
                        <option selected hidden>Selecciones el servicio.</option>
                        @foreach($servicios as $servicio)
                            <option value="{{$servicio->id}}">{{$servicio->id}} - {{$servicio->trailer->placa}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="predio">Predio</label>
                    <select class="form-select" aria-label="Default select example" name="predio" required>
                        <option selected hidden>Selecciones un predio.</option>
                        @foreach($predios as $predio)
                            <option value="{{$predio->id}}">{{$predio->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mt-4">
                    <button type="submit" class="btn btn-primary">DESPACHAR</button>

                </div>
            </div>
        </form>
    </div>
@endsection

