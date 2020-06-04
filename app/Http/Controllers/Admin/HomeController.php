<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        // dd('1234');
        Inertia::setRootView('admin');
        return Inertia::render('Index');
    }
}
