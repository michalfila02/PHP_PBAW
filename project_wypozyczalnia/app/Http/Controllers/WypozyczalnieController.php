<?php

namespace App\Http\Controllers;
use App\Models\wypozyczalnie;
use Illuminate\Http\Request;

class WypozyczalnieController extends Controller
{
    public function index()
    {
        $wypozyczalnie = Wypozyczalnie::all();
        return view('wypozyczalnie.index', compact('wypozyczalnie'));
    }

    public function create()
    {
        return view('wypozyczalnie.create');
    }

    public function store(Request $request)
    {
        $wypozyczalnie = new wypozyczalnie([
            'Nazwa' => $request->input('Nazwa'),
            'Miasto' => $request->input('Miasto'),
            'Ulica' => $request->input('Ulica'),
            'Nr_ulicy' => $request->input('Nr_ulicy'),
            'Telefon_kontaktowy' => $request->input('Telefon_kontaktowy'),
        ]);

        Wypozyczalnie::create($request->all());

        return view('dashboard');
    }

    public function show($id)
    {
        $wypozyczalnie = Wypozyczalnie::find($id);
        return view('wypozyczalnie.show', compact('wypozyczalnie'));
    }

    public function edit($id)
    {
        $wypozyczalnie = Wypozyczalnie::find($id);
        return view('wypozyczalnie.edit', compact('wypozyczalnie'));
    }

    public function update(Request $request, $id)
    {
        $wypozyczalnie = Wypozyczalnie::find($id);
        $wypozyczalnie->update([
            'Nazwa' => $request->input('Nazwa'),
            'Miasto' => $request->input('Miasto'),
            'Ulica' => $request->input('Ulica'),
            'Nr_ulicy' => $request->input('Nr_ulicy'),
            'Telefon_kontaktowy' => $request->input('Telefon_kontaktowy'),
        ]);

        return view('dashboard');
    }

    public function destroy($id)
    {
        $wypozyczalnie = Wypozyczalnie::find($id);
        $wypozyczalnie->delete();

        return view('dashboard');
    }
}
