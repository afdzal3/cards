<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Request $req)
    {

        return view('card.index', []);

    }


}