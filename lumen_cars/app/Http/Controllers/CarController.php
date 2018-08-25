<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Client;


class CarController extends Controller
{
    public function index(){
        $cars = Car::with('clients')->get();
        return json_encode(['data' => $cars]);
    }

    public function show($id){
        $car = Car::find($id);

        return response()->json($car);
     }

    public function store(Request $request){
        Car::create([
            'number' => $request->input('number'),
            'vin' => $request->input('vin'),
            'name' => $request->input('name')
        ]);

        return response()->json(['message'=>'succes'],200);

    }

    public function update(Request $request, $id){

        $car= Car::find($id);

        $car->number = $request->input('number');
        $car->vin = $request->input('vin');
        $car->name = $request->input('name');
        $car->save();

        return response()->json($car);
    }



    public function destroy($id){

        $car = car::find($id);
        $car->delete();

        return response()->json('car removed successfully');

    }
}
