@extends('layout')

@section('contenido')


    <div class="p-3 bg-white mb-5">
        <h3 class="text-center">VEHICULOS EN PREDIO</h3>
        <form action="{{route('parking.index')}}" class="form-inline" method="get">

        <div class="row">
                <div class="col-md-2">
                    <a type="button " href="{{ url('/Parking')}}" class="btn btn-primary mb-3 mt-2 mr-2 md-3 offset float-left"><i class="fas fa-plus"></i> NUEVO </a>
                </div>
                <!--div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                        <input type="date"value=""  class="form-control" name="fecha" id="exampleFormControlInput1" placeholder="Col. el INDE">
                </div-->
            </div>

            <div class="col-md-4">
                <!--button type="submit" class="btn btn-success mb-3 mt-3 mr-2 md-3 offset float-left"><i class="fas fa-search"></i> Buscar</button-->
                <form class="mt-4 mb-5">
                    <i class="fas fa-search"></i> Buscar producto <input id="searchTerm" type="text" onkeyup="doSearch()" />
                </form>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped text-center" id="datos">
                <thead>
                    <tr class="bg-info">
                    <th scope="col">NO.</th>
                    <th scope="col">PLACA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">SERVICIO</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ ++$i }}</td>

                        <td>{{$customer->placa}}</td>
                        <td>{{$customer->nombre}}</td>
                        <td>{{$customer->fecha}}</td>
                        <td>{{$customer->hora}}</td>
                        <td>{{$customer->servicio}}</td>
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

