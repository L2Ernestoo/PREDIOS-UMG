@extends('layout')

@section('contenido')


    <div class="p-3 bg-white mb-3">
        <h3 class="text-center">Lista de Proveedor</h3>

        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">NIT</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">MERCADERIA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->nombre}}</td>
                        <td>{{$customer->correo}}</td>
                        <td>{{$customer->direccion}}</td>
                        <td>{{$customer->numero}}</td>
                        <td>{{$customer->mercaderia}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
