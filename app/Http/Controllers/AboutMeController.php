<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AboutMeController extends Controller
{
    public function view()
    {
        $name = 'John Doe';
        $age = 30;
        $occupation = 'Web Developer';

        return view('about_me', compact('name', 'age', 'occupation'));
    }
    use AuthorizesRequests, ValidatesRequests;
}
