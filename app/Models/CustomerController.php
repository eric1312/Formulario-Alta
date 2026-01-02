<?php
namespace App\Http\Controllers; // ✅ Añade esto
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customers.index', compact('customer'));
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('success', 'Cliente eliminado correctamente');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'nombre_fantasia' => 'required|string|max:255',
            'tiene_movil_verificador' => 'required|boolean',
            "cuit_dni" => 'required|string|max:20',
            "razon_social" => 'required|string|max:255',
            "direccion" => 'required|string|max:255',
            "localidad" => 'required|string|max:100',
            "provincia" => 'required|string|max:100',
            "email_admin" => 'required|email|max:255',
            "telefono_admin" => 'required|string|max:20',
            "movil_verificador" => 'nullable|string|max:20',
            "email_config_dealer" => 'nullable|email|max:255',
            "telefono_config_dealer" => 'nullable|string|max:20',
            "comunicadores_puertos" => 'nullable|string|max:255',
        ]);

        $data['tiene_movil_verificador'] = $request->boolean('tiene_movil_verificador');

        $customer->update($data);

        return redirect()->route('customers.index')
            ->with('success', 'Cliente actualizado correctamente');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_fantasia' => 'required|string|max:255',
            'tiene_movil_verificador' => 'required|boolean',
            "cuit_dni" => 'required|string|max:20',
            "razon_social" => 'required|string|max:255',
            "direccion" => 'required|string|max:255',
            "localidad" => 'required|string|max:100',
            "provincia" => 'required|string|max:100',
            "email_admin" => 'required|email|max:255',
            "telefono_admin" => 'required|string|max:20',
            "movil_verificador" => 'nullable|string|max:20',
            "email_config_dealer" => 'nullable|email|max:255',
            "telefono_config_dealer" => 'nullable|string|max:20',
            "comunicadores_puertos" => 'nullable|string|max:255',
        ]);

        $data['tiene_movil_verificador'] = $request->boolean('tiene_movil_verificador');

        Customer::create($data);

        return redirect()->route('customers.index')
            ->with('success', 'Cliente creado correctamente');
    }

}

