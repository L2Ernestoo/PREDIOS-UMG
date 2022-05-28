@extends('layout')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3 class="text-center">Lista de Clientes</h3>

        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">NIT</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->nombre}}</td>
                        <td class=" border px-4 py-2">
                            <div class="btn-group flex justify-center rounded-lg text-lg">
                                <a href="{{ route('modificar',$customer->id)}}" class=" mr-2 btn btn-primary">
                                    <i class="fas fa-check"></i>
                                </a>
                            </div>
                        </td>
                        <td class=" border px-4 py-2">
                            <form action="{{ route('delete',$customer->id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Eliminar clientes de la base de datos');" class=" btn btn-danger" >
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </td>
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
