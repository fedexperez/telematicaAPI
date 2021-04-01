<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Car::validate($request);

        $car = new Car([
            'id' => $request->get('id'),
            'marca' => $request->get('marca'),
            'modelo' => $request->get('modelo'),
            'valor_comercial' => $request->get('valor_comercial'),
            'valor_alquiler_diario' => $request->get('valor_alquiler_diario'),
            'disponible' => $request->get('disponible')
        ]);
        $car->save();
        return redirect('/api/cars')->with('success', 'Car saved!');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Car::validate($request);

        $car = Car::findOrFail($id);
        $car->id =  $request->get('id');
        $car->marca = $request->get('marca');
        $car->modelo = $request->get('modelo');
        $car->valor_comercial = $request->get('valor_comercial');
        $car->valor_alquiler_diario = $request->get('valor_alquiler_diario');
        $car->disponible = $request->get('disponible');
        $car->save();

        return redirect('/api/cars')->with('success', 'Car updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect('/api/cars')->with('success', 'Car deleted!');
    }
}
