<?php

namespace App\Http\Controllers\Admin;
use AuthAdmin;
use App\Dosen2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
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
        $dosen2s = Dosen2::latest()->paginate(10);
        return view('admin.dosen.index', compact('dosen2s'))->with('i', (request()->input('page',1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen2s = $this->validate(request(), [
            'namaDsn' => 'required',
            'namaJur' => 'required',
            'namaFak' => 'required'             
        ]);

        Dosen2::create($dosen2s);
        return redirect()->route('dosen.index')->with('success', 'Berhasil');
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
        $dosen2s = Dosen2::find($id);
        return view('admin.dosen.edit', compact('dosen2s'));
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
        $dosen2s = $this->validate(request(), [
            'namaDsn' => 'required',
            'namaJur' => 'required',
            'namaFak' => 'required'
        ]);

        Dosen2::find($id)->update($dosen2s);
        return redirect()->route('dosen.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dosen2::find($id)->delete();
        return redirect()->route('dosen.index')->with('success', 'Berhasil');
    }
}
