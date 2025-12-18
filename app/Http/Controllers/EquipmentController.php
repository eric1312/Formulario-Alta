<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments.index', compact('equipments'));
    }

    public function create()
    {
        return view('equipments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:100',
            'notes' => 'nullable|string',
        ]);

        Equipment::create($validated);

        return redirect()->route('equipments.index')->with('success', 'Equipo creado correctamente ✅');
    }

    public function show(Equipment $equipment)
    {
        if (view()->exists('equipments.show')) {
            return view('equipments.show', compact('equipment'));
        }

        // Fallback to JSON to avoid "View not found" error when the Blade file is missing.
        return response()->json($equipment);
    }

    public function edit(Equipment $equipment)
    {
        return view('equipments.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:100',
            'notes' => 'nullable|string',
        ]);

        $equipment->update($validated);

        return redirect()->route('equipments.index')->with('success', 'Equipo actualizado correctamente ✅');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipments.index')->with('success', 'Equipo eliminado correctamente 🗑️');
    }
}
