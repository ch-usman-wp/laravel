<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('player',
            ['players'=> player::all()]
    );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]
        ,[
            'name.required' => 'Enter name',
            'email.required' => 'enter email',
            'email.email' => 'enter @ with email'

        ]
    );
        // dd($request->all());
       Player::forceCreate($request->except(['_token']));
       return redirect()->route('player');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd('asd');
        $player = player::find($id);
        return view ('player-edit', [
            'player'=> $player
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        unset($request['_token']);
        unset($request['_method']);
        $player= Player::find($id);
        $player->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
