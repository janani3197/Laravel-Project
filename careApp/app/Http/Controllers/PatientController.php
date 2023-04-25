<?php

namespace App\Http\Controllers;

use App\Models\CareTaker;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        // $caretakers = Auth::user()->getCarerTakersInSameCity();
        // // $caretakerName = $caretakers->isNotEmpty() ? $caretakers->first() : 'Not available';

        // $CaretakerInfo = $caretakers->first();
        
        // return Inertia::render('NewBooking', ['CaretakerInfo' => $CaretakerInfo]);
        // return Inertia::render('New Booking Dashboard');
        // return view($caretakers);
        return view('test');
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

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}