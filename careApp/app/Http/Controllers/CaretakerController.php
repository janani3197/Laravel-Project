<?php

namespace App\Http\Controllers;

use App\Models\CareTaker;
use Illuminate\Http\Request;

class CareTakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main');  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

}