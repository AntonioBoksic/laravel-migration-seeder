<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// questo lo importo io per poter usare il model Student
use App\Models\Journey;

class MainController extends Controller
{
public function index() {

    $journeys = Journey :: all();

    return view("home", compact("journeys"));

    }
}
