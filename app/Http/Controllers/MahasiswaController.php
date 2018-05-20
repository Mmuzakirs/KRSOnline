<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis' => 'required',
            'fakultas' => 'required',
            'program' => 'required',
            'angkatan' => 'required',
            'ip' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Berhasil'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswas.show', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswas.edit', compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis' => 'required',
            'fakultas' => 'required',
            'program' => 'required',
            'angkatan' => 'required',
            'ip' => 'required'
        ]);

        Mahasiswa::find($id)->update($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Berhasil');
    }
}
