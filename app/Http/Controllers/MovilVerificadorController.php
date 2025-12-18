<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MovilVerificadorController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_fantasia' => 'required|string|max:255',
            'cuit_dni' => 'required|string|max:50',
            'razon_social' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'localidad' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'email_contacto_administrativo' => 'required|email|max:255',
            'telefono_contacto_administrativo' => 'required|string|max:50',
            'tiene_movil_verificador' => 'nullable|boolean',
            'email_config_dealer' => 'required|email|max:255',
            'telefono_config_dealer' => 'required|string|max:50',
            'marca_comunicadores_puertos' => 'nullable|string',
        ]);

        Customer::create($validated);

        return redirect()->route('customers.index')->with('success', 'Cliente creado correctamente ✅');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'nombre_fantasia' => 'required|string|max:255',
            'cuit_dni' => 'required|string|max:50',
            'razon_social' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'localidad' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'email_contacto_administrativo' => 'required|email|max:255',
            'telefono_contacto_administrativo' => 'required|string|max:50',
            'tiene_movil_verificador' => 'nullable|boolean',
            'email_config_dealer' => 'required|email|max:255',
            'telefono_config_dealer' => 'required|string|max:50',
            'marca_comunicadores_puertos' => 'nullable|string',
        ]);

        $customer->update($validated);

        return redirect()->route('customers.index')->with('success', 'Cliente actualizado correctamente ✅');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente eliminado correctamente 🗑️');
    }
}
