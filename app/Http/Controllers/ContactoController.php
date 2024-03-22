<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Models\Contacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all(); // Obtiene todos los contactos de la base de datos.
    return view('contactos.index', compact('contactos')); // Pasa los contactos a la vista 'contactos.index'.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request)
    {
        // Crear una nueva instancia del modelo Contacto
        $contacto = new Contacto();
    
        // Asignar cada campo validado manualmente al modelo
        // Asegúrate de que los nombres de los campos coincidan exactamente con los de tu formulario y base de datos
        $contacto->nombre = $request->input('nombre');
$contacto->correo_electronico = $request->input('correo_electronico');
$contacto->telefono = $request->input('telefono');
$contacto->empresa = $request->input('empresa');
    
        // Guardar el modelo en la base de datos
        $contacto->save();
    
        // Redireccionar al usuario a la lista de contactos con un mensaje de éxito
        return redirect()->route('contactos.index')->with('success', 'Contacto agregado con éxito.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
