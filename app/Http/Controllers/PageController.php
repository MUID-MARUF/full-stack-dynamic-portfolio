<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    private $portfolio;

    public function __construct()
    {
        $data = File::get(resource_path('data/database.json'));
        $this->portfolio = json_decode($data, true);
    }

    public function projects()
    {
        return view('projects', ['projects' => $this->portfolio['projects']]);
    }

    public function about()
    {
        return view('about', ['about' => $this->portfolio['about']]);
    }

    public function experience()
    {
        return view('experience', [
            'experience' => $this->portfolio['experience'],
            'achievements' => $this->portfolio['achievements'],
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
