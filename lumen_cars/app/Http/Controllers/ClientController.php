<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Client;


class ClientController extends Controller
{
    public function index(){
        $clients = Client::with('cars')->get();
        return json_encode(['data' => $clients]);
    }

    public function show($id){
        $client = client::find($id);

        return response()->json($client);
     }

    public function store(Request $request){
        Client::create([
            'car_id' => $request->input('car_id'),
            'name' => $request->input('name')
        ]);

        return response()->json(['message'=>'succes'],200);

    }

    public function update(Request $request, $id){

        $client= Client::find($id);

        $client->car_id = $request->input('car_id');
        $client->name = $request->input('name');
        $client->save();

        return response()->json($client);
    }



    public function destroy($id){

        $client = client::find($id);
        $client->delete();

        return response()->json('client removed successfully');

    }
}
