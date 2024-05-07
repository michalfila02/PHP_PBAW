<?php

namespace App\Http\Controllers;
use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = role::all();
        return view('role.index', compact('role'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $role = new role([
            'Role' => $request->input('Role'),
            'Wypozyczalnie_Nazwa' => $request->input('Wypozyczalnie_Nazwa'),
        ]);

        role::create($request->all());

        return view('dashboard');
    }

    public function show($id)
    {
        $role = role::find($id);
        return view('role.show', compact('role'));
    }

    public function edit($id)
    {
        $role = role::find($id);
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = role::find($id);
        $role->update([
            'Role' => $request->input('Role'),
            'Wypozyczalnie_Nazwa' => $request->input('Wypozyczalnie_Nazwa'),
        ]);

        return view('dashboard');
    }

    public function destroy($id)
    {
        $role = role::find($id);
        $role->delete();

        return view('dashboard');
    }
}
