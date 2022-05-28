@extends('layout')
@section('title', 'crear piloto')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">REGISTRAR CAMION</h3>
    </div>
    <div class="container shadow-sm rounded p-4">
        <form method="post" action="{{route('store.camiones')}}">
            @csrf
            <div class="row mt-4">
                <div class="col-md-3">
                    <label class="form-label">MARCA</label>
                    <input type="text" maxlength="50" class="form-control" id="nombre" name="marca" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">LINEA</label>
                    <input type="text" maxlength="35" class="form-control" id="cui" name="linea" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">MODELO</label>
                    <input type="text" maxlength="4" class="form-control" id="fecha_nacimiento" name="modelo" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">PLACA</label>
                    <input type="text" class="form-control" id="fecha_nacimiento" name="placa" required>
                </div>
            </div>
            <div class="d-flex mt-2">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
@endsection

