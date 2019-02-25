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

        $validazioneDati = $request->validate([

          'name' => 'required|min:3',
          'surname' => 'required|min:3',
          'team' => 'required|min:3',

        ]);

        /*USANDO FILL*/
        $newDriver = new Driver(); //creo l'oggetto driver
        $newDriver->fill($driverInfo);
        $newDriver->save(); //salvo il record
        /****************/

        /*USANDO METODO CLASSICO*/
      /* $newDriver->name = $driverInfo["name"]; // gli passo i valori delle propietà
        $newDriver->surname = $driverInfo["surname"];
        $newDriver->team = $driverInfo["team"];*/
        /****************/

      //  dd($driverInfo);


      return redirect()->route('drivers.index'); //lo spedisco sulla rotta iniziale

    }

    public function show(Driver $driver) //metodo injection
    {
      //$driver = Driver::find($id); // metodo con find

      return view("show", compact('driver'));
    }

    public function edit(Driver $driver)
    {
      //$driver = Driver::find($id); // metodo con find

      //recupero la vista del form edit
      return view("edit", compact('driver'));
    }

    //qui eseguo il vero e proprio aggiornamento che parte dal form edit
    public function update(Request $request, $id)
    {
      $driver = Driver::find($id); //trovo il driver in base all id

      $dati = $request->all(); // recupero tutti i dati!

      $driver->update($dati); //aggiorno */

      //dd($driver);

      return redirect()->route('drivers.index'); //lo spedisco sulla rotta iniziale

    }

    public function destroy($id)
    {
        $driver = Driver::find($id); //trovo il driver in base all id


        $driver->delete(); //elimino */

        return redirect()->route('drivers.index'); //lo spedisco sulla rotta iniziale


    }
}
