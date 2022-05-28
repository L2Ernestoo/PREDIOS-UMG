@extends('layout')
@section('title', 'Predios')
@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">PREDIOS</h3>
        <form action="{{route('parking.index')}}" class="form-inline" method="get">

            <div class="row">
                <div class="col-md-2">
                    <a type="button " href="{{ url('/Parking')}}" class="btn btn-primary mb-3 mt-2 mr-2 md-3 offset float-left"><i class="fas fa-plus"></i> NUEVO </a>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped text-center" id="datos">
                <thead>
                <tr class="bg-info">
                    <th scope="col">NO.</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCION</th>
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

