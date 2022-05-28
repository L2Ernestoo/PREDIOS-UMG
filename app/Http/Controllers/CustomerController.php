<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //vista de inicio, no se ve nada mas que el navard
    public function inicio(){
        return view('layout');
    }

    //VISTA DE LISTA CLIENTES
    public function index(){
        $customers = Customer::paginate(5);
        return view('customer.list', compact('customers'));
    }
    //FORMULARIO PARA REGISTRAR NUEVO CLIENTE
    public function register(){
        return view('customer.create');
    }

    //VISTA DE LISTA DE CLIENTES CON OPCIONES DE MODIFICAR (EDITAR Y ELIMINAR)
    public function ver(){
        $customers = Customer::paginate(14);
        return view('customer.modify', compact('customers'));
    }

    //GUARDAR CLIENTE EN LA BD
    public function SaveCustomer(Request $request){
        $validator=$this->validate($request,[
            //el id es el nit del cliente
            'id'=>'required|unique:customer',
            'nombre'=>'required',
            'direccion'=>'required',
            'correo'=>'required|email|unique:customer',
            'numero'=>'required'
        ]);
        $userdata = request()->except('_token');
        customer::insert($userdata);
        return back() ->with('clienteguardado', 'Cliente guardado con exito');
    }

    //FORMULARIO PARA EDITAR CLIENTE
    public function modificar($id){
        $cliente=Customer::findorfail($id);
        return view('customer.edit', compact('cliente'));
    }

    //EDITAR CLIENTES EN LA BD
    public function edit(Request $request,$id){
        $datoscliente=request()->except((['_token','_method']));
        Customer::where('id','=', $id)->update($datoscliente);
        return back() ->with('clientemodificado', 'Cliente modificado con exito');
    }

    //ELIMINAR CLIENTES DE LA BD
    public function delete($id){
        Customer::destroy($id);
        return back() ->with('clienteguardado', 'Cliente guardado con exito');
    }
}
