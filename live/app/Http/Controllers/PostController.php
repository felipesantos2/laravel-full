<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    //~index create edit store show update
    public function create(): View
    {
        return view('post-create');
    }
}
