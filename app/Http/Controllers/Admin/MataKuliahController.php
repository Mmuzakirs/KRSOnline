<?php

namespace App\Http\Controllers\Admin;
use AuthAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MataKuliahController extends Controller
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
        return view ('admin.mataKuliah.index');   
    }
}
