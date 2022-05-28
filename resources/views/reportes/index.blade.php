@extends('layout')
@section('title', 'Predios')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">REPORTE INGRESO Y SALIDAS</h3>
        <form action="{{route('parking.index')}}" class="form-inline" method="get">
        </form>
        <div class="table-responsive">
            <table class="table table-striped text-center" id="datos">
                <thead>
                <tr class="bg-info">
                    <th scope="col">NO.</th>
                    <th scope="col">CONTENEDOR</th>
                    <th scope="col">PILOTO</th>
                    <th scope="col">NAVIERA</th>
                    <th scope="col">PLACA</th>
                    <th scope="col">FECHA_INGRESO</th>
                    <th scope="col">BOLETA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($predios as $predio)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$predio->nombre}}</td>
                        <td>{{$predio->direccion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

