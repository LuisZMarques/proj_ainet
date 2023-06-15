<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class ColorController extends Controller
{
    public function index() : View
    {
        $colors = Color::paginate(15);
        return view('colors.index', compact('colors'));
    }

    public function create() : View
    {
        return view('colors.create');
    }

    public function show(Color $color) : View
    {
        if (Auth::user()->isAdmin()) {
            return view('colors.show', compact('color'));
        } else {
            return view('home')->with('alert-msg', 'Não tem permissões para ver cores!')->with('alert-type', 'danger');
        }
    }

    public function edit(Color $color): View
    {
        if (Auth::user()->isAdmin()) {
            return view('colors.edit')->with('color', $color);
        } else {
            return view('home')->with('alert-msg', 'Não tem permissões para ver cores!')->with('alert-type', 'danger');
        }
    }

    public function update(Request $request, Color $color) : View
    {
        if (Auth::user()->isAdmin()) {
            $color->update($request->all());
            $code = $color->code;
            return view('colors.edit', compact('color'));
        } else {
            return view('home')->with('alert-msg', 'Não tem permissões para editar cores!')->with('alert-type', 'danger');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        Color::create($request->all());
        return redirect()->route('colors.index');
    }

    public function destroy(Color $color): RedirectResponse
    {
        try {
            $color->delete();

            return redirect()->route('colors.index');
        } catch (\Exception $error) {
            $url = route('colors.index');
            $htmlMessage = "Não foi possível apagar a cor <a href='$url'>#{$color->id}</a> <strong>\"{$color->name}\"</strong> porque ocorreu um erro!" . $error->getMessage();
            $alertType = 'danger';
        }
        return back()
            ->with('alert-msg', $htmlMessage)
            ->with('alert-type', $alertType);
    }
    
}
