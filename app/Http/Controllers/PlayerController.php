<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('pages.players.index')->withPlayers($players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);
        return view('pages.players.show')->withPlayer($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /** Checks to see if a value is null and returns NA if true and the value if not
     *
     * @param $value string, int to be checked
     * @param $default string value
     * @return string
     */
    static function checkIfNull($value, $default = "N/A") {
        if (is_null($value) or strlen($value) == 0)
        {
            return($default);
        }
        else
        {
            return($value);
        }
    }

    /** Takes in height as inches and returns height in feet ' inch " style
     *
     * @param int $height
     * @return string
     */
    static function getHumanHeight($height) {
        $feet = intdiv($height, 12);
        $inch = $height % 12;
        return ($feet . "' " . $inch . '"');
    }
}
