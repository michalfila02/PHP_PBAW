<?php

namespace App\Http\Controllers;
use App\Models\wypozyczalnia;
use Illuminate\Http\Request;

class WypozyczalniaController extends Controller
{
    public function index()
    {
        $wypozyczalnia = Wypozyczalnia::all();
        return view('wypozyczalnia.index', compact('wypozyczalnia'));
    }

    public function create()
    {
        return view('wypozyczalnia.create');
    }

    public function store(Request $request)
    {
        $wypozyczalnia = new wypozyczalnia([
            'Nr_wypozyczenia' => $request->input('Nr_wypozyczenia'),
            'Imie' => $request->input('Imie'),
            'Nazwisko' => $request->input('Nazwisko'),
            'PESEL' => $request->input('PESEL'),
            'Data_wypożyczenia' => $request->input('Data_wypożyczenia'),
            'Data_oddania' => $request->input('Data_oddania'),
            'Samochody_Nr_rejestracyjny' => $request->input('Samochody_Nr_rejestracyjny'),
        ]);

        Wypozyczalnia::create($request->all());

        return view('dashboard');
    }

    public function show($id)
    {
        $wypozyczalnia = Wypozyczalnia::find($id);
        return view('wypozyczalnia.show', compact('wypozyczalnia'));
    }

    public function edit($id)
    {
        $wypozyczalnia = Wypozyczalnia::find($id);
        return view('wypozyczalnia.edit', compact('wypozyczalnia'));
    }

    public function update(Request $request, $id)
    {
        $wypozyczalnia = Wypozyczalnia::find($id);
        $wypozyczalnia->update([
            'Nr_wypozyczenia' => $request->input('Nr_wypozyczenia'),
            'Imie' => $request->input('Imie'),
            'Nazwisko' => $request->input('Nazwisko'),
            'PESEL' => $request->input('PESEL'),
            'Data_wypożyczenia' => $request->input('Data_wypożyczenia'),
            'Data_oddania' => $request->input('Data_oddania'),
            'Samochody_Nr_rejestracyjny' => $request->input('Samochody_Nr_rejestracyjny'),
        ]);

        return view('dashboard');
    }

    public function destroy($id)
    {
        $wypozyczalnia = Wypozyczalnia::find($id);
        $wypozyczalnia->delete();

        return view('dashboard');
    }
}