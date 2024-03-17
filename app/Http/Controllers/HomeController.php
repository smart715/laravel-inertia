<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Todo;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'todos' => Todo::latest()->get(),
        ]);
    }
    public function store(Request $request)
    {
        Todo::create([
            'task' => $request->input('task'),
        ]);

        return redirect()->to('/');
    }
}
