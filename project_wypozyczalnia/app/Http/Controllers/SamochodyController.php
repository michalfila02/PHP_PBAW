<?php

namespace App\Http\Controllers;
use App\Models\samochody;
use Illuminate\Http\Request;

class SamochodyController extends Controller
{
    public function index()
    {
        $samochody = samochody::all();
        return view('samochody.index', compact('samochody'));
    }

    public function create()
    {
        return view('samochody.create');
    }

    public function store(Request $request)
    {
        $samochody = new samochody([
            'Nr_rejestracyjny' => $request->input('Nr_rejestracyjny'),
            'Marka' => $request->input('Marka'),
            'Model' => $request->input('Model'),
            'Koszt_wynajecia_na_dzien' => $request->input('Koszt_wynajecia_na_dzien'),
            'Przebieg_w_km' => $request->input('Przebieg_w_km'),
            'Wypozyczalnie_Nazwa' => $request->input('Wypozyczalnie_Nazwa'),
        ]);

        samochody::create($request->all());

        return view('dashboard');
    }

    public function show($id)
    {
        $samochody = samochody::find($id);
        return view('samochody.show', compact('samochody'));
    }

    public function edit($id)
    {
        $samochody = samochody::find($id);
        return view('samochody.edit', compact('samochody'));
    }

    public function update(Request $request, $id)
    {
        $samochody = samochody::find($id);
        $samochody->update([
            'Nr_rejestracyjny' => $request->input('Nr_rejestracyjny'),
            'Marka' => $request->input('Marka'),
            'Model' => $request->input('Model'),
            'Koszt_wynajecia_na_dzien' => $request->input('Koszt_wynajecia_na_dzien'),
            'Przebieg_w_km' => $request->input('Przebieg_w_km'),
            'Wypozyczalnie_Nazwa' => $request->input('Wypozyczalnie_Nazwa'),
        ]);

        return view('dashboard');
    }

    public function destroy($id)
    {
        $samochody = samochody::find($id);
        $samochody->delete();

        return view('dashboard');
    }
}
