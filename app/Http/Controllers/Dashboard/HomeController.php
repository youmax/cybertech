<?php

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
        return Inertia::render('Index');
    }
}
