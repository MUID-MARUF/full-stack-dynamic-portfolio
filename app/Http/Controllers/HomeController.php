<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = File::get(resource_path('data/database.json'));
        $portfolio = json_decode($data, true);

        return view('welcome', [
            'home' => $portfolio['home'],
        ]);
    }
}
