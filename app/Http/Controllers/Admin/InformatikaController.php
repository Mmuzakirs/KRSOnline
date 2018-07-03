<?php

namespace App\Http\Controllers\Admin;
use AuthAdmin;
use App\Informatika;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformatikaController extends Controller
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
        $informatikas = Informatika::latest()->paginate(10);
        return view('admin.informatika.index', compact('informatikas'))->with('i', (request()->input('page',1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informatika.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informatikas = $this->validate(request(), [
            'matakuliah' => 'required',
            'sks' => 'required',
            'semester' => 'required'   
        ]);

        Informatika::create($informatikas);
        return redirect()->route('informatika.index')->with('success', 'Berhasil');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Informatika::find($id)->delete();
        return redirect()->route('informatika.index')->with('success', 'Berhasil');
    }
}
