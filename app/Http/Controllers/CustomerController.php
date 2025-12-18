<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $customers = Customer::when($q, fn($qbl) => $qbl->where('nombre_fantasia','like',"%$q%")->orWhere('cuit_dni','like',"%$q%"))
                    ->orderBy('id','desc')->paginate(15);
        return view('customers.index', compact('customers','q'));
    }

    public function create() { return view('customers.create'); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_fantasia'=>'required|string|max:255',
            'cuit_dni'=>'nullable|string|max:50',
            'razon_social'=>'nullable|string|max:255',
            'direccion'=>'nullable|string|max:255',
            'localidad'=>'nullable|string|max:100',
            'provincia'=>'nullable|string|max:100',
            'email_admin'=>'nullable|email|max:255',
            'telefono_admin'=>'nullable|string|max:50',
            'tiene_movil_verificador'=>'nullable|boolean',
            'email_config_dealer'=>'nullable|email|max:255',
            'telefono_config_dealer'=>'nullable|string|max:50',
            'comunicadores_puertos'=>'nullable|string',
        ]);

        Customer::create($validated);
        return redirect()->route('customers.index')->with('success','Cliente creado correctamente.');
    }

    public function show(Customer $customer) { return view('customers.show', compact('customer')); }

    public function edit(Customer $customer) { return view('customers.edit', compact('customer')); }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'nombre_fantasia'=>'required|string|max:255',
            'cuit_dni'=>'nullable|string|max:50',
            'razon_social'=>'nullable|string|max:255',
            'direccion'=>'nullable|string|max:255',
            'localidad'=>'nullable|string|max:100',
            'provincia'=>'nullable|string|max:100',
            'email_admin'=>'nullable|email|max:255',
            'telefono_admin'=>'nullable|string|max:50',
            'tiene_movil_verificador'=>'nullable|boolean',
            'email_config_dealer'=>'nullable|email|max:255',
            'telefono_config_dealer'=>'nullable|string|max:50',
            'comunicadores_puertos'=>'nullable|string',
        ]);

        $customer->update($validated);
        return redirect()->route('customers.index')->with('success','Cliente actualizado correctamente.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Cliente eliminado.');
    }
}
