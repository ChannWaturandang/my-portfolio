<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $careers = Career::all();
        return view('contents.about', ['careers' => $careers]);
    }
}
