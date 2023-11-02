<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index(){
        // dd('asd');

        return view('league',
        ['leagues' => league::all()]
    );
    }
    public function edit(string $id){
        // dd($id);
        $league= League::find($id);
        return view('league-edit',[
            'league'=> $league
        ]);
    }
    public function store(Request $request){
        League::forceCreate($request->except('_token'));
        redirect()->route('league');
    }

    public function update(Request $request, string $id){
        // dd($request->all());
        unset($request['_token']);
        unset($request['_method']);
        $league= League::find($id);
        $league->update($request->all());
    }


}
