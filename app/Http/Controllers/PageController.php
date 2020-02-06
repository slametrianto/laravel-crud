<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return 'this is about';
    }

    public function contact()
    {
        return 'this is contact';
    }
}
