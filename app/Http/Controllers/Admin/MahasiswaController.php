<?php

namespace App\Http\Controllers\Admin;
use AuthAdmin;
use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('admin.mahasiswa.index', compact('mahasiswas'))->with('i', (request()->input('page',1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswas = $this->validate(request(), [
            'namaMhs' => 'required',
            'namaJur' => 'required',
            'namaFak' => 'required',
            'angkatan' => 'required'
        ]);

        Mahasiswa::create($mahasiswas);
        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin.mahasiswa.edit', compact('mahasiswas'));
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
        $mahasiswas = $this->validate(request(), [
            'namaMhs' => 'required',
            'namaJur' => 'required',
            'namaFak' => 'required',
            'angkatan' => 'required'
        ]);

        Mahasiswa::find($id)->update($mahasiswas);
        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil');
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
        return redirect()->route('mahasiswa.index')->with('success', 'Berhasil');
    }
}
