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
    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'is_done' => $request->boolean('is_done'),
        ]);

        return redirect()->to('/');
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->to('/');
    }



}
