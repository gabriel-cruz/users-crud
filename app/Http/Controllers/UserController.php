<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
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

        // $dataForm = $request->all();
        // $state_id = $dataForm['state_id'];

        
        // return $cities;
    }
}
