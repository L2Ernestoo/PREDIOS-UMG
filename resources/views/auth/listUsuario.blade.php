@extends('layout')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3 class="text-center">Lista de Usuario</h3>

        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">CODIGO USUARIO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ELIMINAR</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                        <td class=" border px-4 py-2">
                            <form action="{{ route('delete_User',$user->id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Eliminar usuario de la base de datos');" class=" btn btn-danger" >
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
            {{ $users->links() }}
        </div>
    </div>
@endsection
