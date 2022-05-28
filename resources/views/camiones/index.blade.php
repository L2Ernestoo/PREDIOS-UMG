@extends('layout')
@section('title', 'Predios')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">CAMIONES</h3>
        <div class="table-responsive">
            <table class="table table-striped text-center" id="datos">
                <thead>
                <tr class="bg-info">
                    <th scope="col">NO.</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">LINEA</th>
                    <th scope="col">MODELO</th>
                    <th scope="col">PLACA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($camiones as $camion)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$camion->marca}}</td>
                        <td>{{$camion->linea}}</td>
                        <td>{{$camion->modelo}}</td>
                        <td>{{$camion->placa}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

