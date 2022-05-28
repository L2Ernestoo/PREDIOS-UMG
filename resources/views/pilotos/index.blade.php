@extends('layout')
@section('title', 'Predios')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">pILOTOS</h3>
        <div class="table-responsive">
            <table class="table table-striped text-center" id="datos">
                <thead>
                <tr class="bg-info">
                    <th scope="col">NO.</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CUI</th>
                    <th scope="col">FECHA NACIMIENTO</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pilotos as $piloto)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$piloto->nombre}}</td>
                        <td>{{$piloto->cui}}</td>
                        <td>{{$piloto->fecha_nacimiento}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

