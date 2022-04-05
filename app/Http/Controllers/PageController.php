<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;


class PageController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function index()
    {
        //Renderiza Resources/js/Pages/Welcome.vue
        return inertia::render('Welcome');
    }
    public  function rfc(){
        echo ('aqui estoyyy!!!!');
    }
}
