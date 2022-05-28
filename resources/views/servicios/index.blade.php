@extends('layout')
@section('title', 'Ingreso')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">INGRESO</h3>
    </div>
    <div class="container shadown-sm rounded p-4">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="Naviera">Naviera</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected hidden>Selecciones una naviera.</option>
                        @foreach($navieras as $naviera)
                            <option value="{{$naviera->id}}">{{$naviera->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="piloto">Piloto</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected hidden>Selecciones un Piloto.</option>
                        @foreach($pilotos as $piloto)
                            <option value="{{$piloto->id}}">{{$piloto->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="predio">Predio</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected hidden>Selecciones un predio.</option>
                        @foreach($predios as $predio)
                            <option value="{{$predio->id}}">{{$predio->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Numero Contenedor</label>
                    <input type="text" class="form-control" id="numero_contenedor" name="numero_contenedor" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Placa Chassis</label>
                    <input type="text" class="form-control" id="placa_chassis" name="numero_contenedor" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Comentario</label>
                    <input type="text" class="form-control" id="numero_contenedor" name="numero_contenedor" required>
                </div>
            </div>
            <div class="d-flex mt-4">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
@endsection

