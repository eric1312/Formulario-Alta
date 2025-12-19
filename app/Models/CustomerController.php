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
}
