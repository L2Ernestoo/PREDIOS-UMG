@extends('layout')
@section('title', 'crear piloto')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">REGISTRAR PILOTO</h3>
    </div>
    <div class="container shadow-sm rounded p-4">
        <form method="post" action="{{route('store.piloto')}}">
            @csrf
            <div class="row mt-4">
                <div class="col-md-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" maxlength="50" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">CUI</label>
                    <input type="text" maxlength="35" class="form-control" id="cui" name="cui" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>
            </div>
            <div class="d-flex mt-4">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
@endsection

