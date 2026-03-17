<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SuperheroController extends Controller
{
    public function index(): View
    {
        $heroes = Superhero::all();
        return view('superheroes.index', compact('heroes'));
    }

    public function create(): View
    {
        return view('superheroes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'required|url',
            'info'      => 'nullable|string',
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index')
                         ->with('success', '¡Superhéroe registrado!');
    }

    public function show(Superhero $superhero): View
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero): View
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero): RedirectResponse
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'required|url',
            'info'      => 'nullable|string',
        ]);

        $superhero->update($request->all());

        return redirect()->route('superheroes.index')
                         ->with('success', '¡Superhéroe actualizado!');
    }

    public function destroy(Superhero $superhero): RedirectResponse
    {
        $superhero->delete();

        return redirect()->route('superheroes.index')
                         ->with('success', '¡Superhéroe eliminado!');
    }
}