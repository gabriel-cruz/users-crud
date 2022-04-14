<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Redirect;
use App\Models\User;


class UserController extends Controller
{
    public $state;

    public function index(){
        $users = User::get();
        return view('users.list', ['users' => $users]);
    }


    public function create(){
        $states = json_decode(
            Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados", ['OrderBy' => 'nome'])->body()
        );

        $cities = [];

        if($this->state){
            $cities = json_decode(
                HTTP::get(
                    "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$this->state}/municipios")->body()
                );
        }
        
        
        return view('users.form' , 
        ['states' => $states,
          'cities' => $cities]);
    }

    public function add(Request $request){
        $user = new User;
        $user = $user->create($request->all());

        return Redirect::to('/users');

    }
}
