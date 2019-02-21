<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{

    public function index()
    {
        $drivers = Driver::all();
        return view("index", compact('drivers'));
    }
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $driverInfo = $request->all(); //recupero tutti i dati dal form

        $newDriver = new Driver(); //creo l'oggetto driver
        $newDriver->name = $driverInfo["name"]; // gli passo i valori delle propietà
        $newDriver->surname = $driverInfo["surname"];
        $newDriver->team = $driverInfo["team"];

      //  dd($driverInfo);

      $newDriver->save(); //salvo il record


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
