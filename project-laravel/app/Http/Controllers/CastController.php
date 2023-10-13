<?php

namespace App\Http\Controllers;

use App\Models\CastFilm;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function cast() {
        $allCast = CastFilm::latest()->get();
        return view("cast.cast")->with('allCast', $allCast);
    }

    public function create()
    {
        return view("cast.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ], [
            'nama.required' => 'nama cannot be blank',
            'umur.required' => 'umur cannot be blank',
            'bio.required' => 'bio cannot be blank'
        ]);
        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ];
        CastFilm::create($data);
        return redirect()->to('cast')->with('success', 'added data successfully');
    }
    public function show(string $id)
    {
        $data = CastFilm::where('nama', $id)->first();
        return view('cast.show')->with('data',$data);
    }

    public function edit(string $id)
    {
        $data = CastFilm::where('nama', $id)->first();
        return view('cast.edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ], [
            'nama.required' => 'nama cannot be blank',
            'umur.required' => 'umur cannot be blank',
            'bio.required' => 'bio cannot be blank',
        ]);
        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ];
        CastFilm::where('id', $id)->update($data);
        return redirect()->to('cast')->with('success', 'Update data successfully');
    }
    public function destroy($id)
    {
        CastFilm::where('id', $id)->delete();
        return redirect()->to('cast')->with('success', 'The data has been successfully deleted');
    }
}
