<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class ContactComposer
{
    protected $contact;

    public function __construct()
    {
        $data = File::get(resource_path('data/database.json'));
        $portfolio = json_decode($data, true);
        $this->contact = $portfolio['contact'];
    }

    public function compose(View $view)
    {
        $view->with('contact', $this->contact);
    }
}
