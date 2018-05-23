<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages.welcome');
    }
    
    public function getTeamPage() {
        return view('pages.teamsPage');
    }
    
    public function getOneTeamPage() {
        return view('pages.oneTeamPage');
    }
}
