<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\State;
use App\Models\City;


class UserController extends Controller
{
    public function __construct(State $state, City $city){
        $this->state = $state;
        $this->city = $city;
    }

    public function index(){
        $users = User::get();

        return view('users.list', ['users' => $users]);
    }


    public function create(){       
        $states = $this->state->orderBy('name', 'ASC')->get();
        //$cities = $this->city->Where('id', '=', 0)->orderBy('name', 'ASC')->get();
        
        return view('users.form', ['states' => $states]);
    }

    public function loadCities(Request $request){
        echo $stateId = $request->post('stateId');
        $city = DB::table('cities')->where('state_id', $stateId)->orderBy('name', 'ASC')->get();
        
        $html = '<option value="">Selecione a Cidade</option>';
        foreach ($city as $list){
            $html.='<option value="'.$list->id.'">'.$list->name.'</option>';
        }
        echo $html;
    }

    public function add(Request $request){
        $user = new User();
        $user = $user->create($request->all());

        return Redirect::to('/users');
    }

    public function get($id){
        $user = User::findOrFail($id );
        return view('users.profile', ['user' => $user]);
    }

    public function edit($id){
        $user = User::findOrFail($id );
        return view('users.edit', ['user' => $user]);
    }

    public function update( $id, Request $request ){
        $user = User::findOrFail( $id );
        $user->update( $request->all() );
        return Redirect::to('/users');
    }

    public function delete( $id ){
        $user = User::findOrFail( $id );
        $user->delete();
        return Redirect::to('/users');
    }
}
