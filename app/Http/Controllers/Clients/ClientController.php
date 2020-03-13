<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientStoreRequest;
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

        return view('Clientes/create');
        //$clientModel = app(Client::class);
        //$client = $clientModel->create([
            //'name'=> 'name teste2',
            //'cpf'=> 1234567899,
            //'email'=>'teste2@gmail.com',
            //'active_flag'=>false,
        //]);

        //dd($client);

    }

    public function store(ClientStoreRequest $Request){    

        $data=$Request->all();

        $clientModel = app(data::class);

        $data= $clientModel->create([
            'name'=>$data['name'],
            'cpf'=>preg_replace("/[^A-Za-z0-9]/", "",$data['cpf']) ,
            'email'=>$data['email'],
            'endereco'=>$data['endereco'] ?? null,
            'active_flag'=>isset($data['activebox']) ? true : false,
        ]);
        return redirect()->route('clients.index');
       
    }
}
