<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clientModel = app(Client::class);

        $clients = $clientModel->all(); //todos os dados

        //$clients = $clientModel->find(1); //direto a um registro

        //$clients = $clientModel->where('cpf',1234567898)->get(); //um dado especifico

        return view('Clientes/index', compact('clients'));







        
      
    }

    public function create(){
        $clientModel = app(Client::class);
        $client = $clientModel->create([
            'name'=> 'name teste2',
            'cpf'=> 1234567899,
            'email'=>'teste2@gmail.com',
            'active_flag'=>false,
        ]);

        dd($client);

    }
}
