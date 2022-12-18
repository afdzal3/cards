<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
Program Input :
a. Number of people (numerical value)
b. It does not matter how cards are given if recompile of program arguments, parameter,
keyboard input and so on are not necessary.
c. In case input value is nil or value is invalid then the error message of “Input value does
not exist or value is invalid” must be displayed and the process must be terminated.
d. Any number less than 0 is an invalid value.
e. Greater than 53 are normal values and cards must be distributed to a number of people
instead of having it as an error
*/


class CardController extends Controller
{
    public function index(Request $req)
    {

    
        return view('card.index', []);
    }

    public function doShuffle(Request $req){

        $result = [];
        if ($req->filled('num_of_people')) {

            $validated = $req->validate([
                'num_of_people' => 'required|integer|min:1',
            ]);


            $symbols = array('S', 'H', 'D', 'C');
            $numbers = array('A', '2', '3', '4', '5', '6', '7', '8', '9', 'X', 'J', 'Q', 'K');
            $cards = array();

            foreach ($symbols as $symbol) {
                foreach ($numbers as $number) {
                    $cards[] = $symbol . "-" . $number;
                }
            }

            $collection = collect($cards);
            $shuffled_cards = $collection->shuffle();
            $shuffled_cards->all();

            // dd($shuffled_cards);

            $num_of_people = $req->num_of_people;
            $cards_per_person = floor(count($shuffled_cards) / $num_of_people);
            for ($i = 0; $i < $num_of_people; $i++) {
                //$result[$i]="k";
                for ($j = $i * $cards_per_person; $j < ($i + 1) * $cards_per_person; $j++) {
                    if ($j < 52) {
                    //    $result .= $shuffled_cards[$j] . ',';\
                        $result[$i][$j] = $shuffled_cards[$j];
                        unset($shuffled_cards[$j]);
                    }
                }
                
            }
        }

        dd($result);
            return view('card.index', ['result' => $result]);

    }
}