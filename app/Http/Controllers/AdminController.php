<?php

namespace App\Http\Controllers;
use App\Models\Achievements;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.contents.dashboard', ['title' => 'Dashboard']);
    }

    public function achievements () {
        return view('admin.contents.achievements', ['achievements' => Achievements::all(), 'title' => 'Achievements']);

    }
}


