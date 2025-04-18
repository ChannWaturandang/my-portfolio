<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Education;
use App\Models\Paragraph;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $careers = Career::all();
        $paragraphs = Paragraph::all();
        $educations = Education::all();

        return view('contents.about', [
            'careers' => $careers,
            'paragraphs' => $paragraphs,
            'educations' => $educations
        ]);
    }


}
