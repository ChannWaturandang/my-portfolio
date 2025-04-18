<?php

namespace App\Http\Controllers;
use App\Models\Achievements;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function overview() {
        return view('admin.contents.dashboard', ['title' => 'Dashboard']);
    }

    public function about () {
        return view('admin.contents.achievements', ['achievements' => Achievements::all(), 'title' => 'Achievements']);
    }
    public function achievements () {
        return view('admin.contents.achievements', ['achievements' => Achievements::all(), 'title' => 'Achievements']);
    }
    public function projects () {
        return view('admin.contents.achievements', ['achievements' => Achievements::all(), 'title' => 'Achievements']);
    }
    public function dashboard () {
        return view('admin.contents.achievements', ['achievements' => Achievements::all(), 'title' => 'Achievements']);
    }
}


