<?php

namespace App\Http\Controllers;
use App\Models\Cita;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    
    public function index()
    {
        return view('Index'); 
    }


    public function create()
    {
        return view('citas'); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'razon' => 'required|string',
            'fecha' => 'required|date',
        ]);

        
        Cita::create([
            'nombre' => $request->nombre,
            'razon' => $request->razon,
            'fecha' => $request->fecha,
        ]);

        
        return redirect()->back()->with('success', 'Cita agendada correctamente.');
    }


}