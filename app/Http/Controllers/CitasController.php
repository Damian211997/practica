<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('citas', compact('citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        Cita::create($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita guardada con éxito');
    }
}
