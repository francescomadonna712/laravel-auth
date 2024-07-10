<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 

use App\Models\Boolfolio;
use Illuminate\Http\Request;

class BoolfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boolfolios = Boolfolio::all();
        return view('admin.boolfolios.index', compact('boolfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.boolfolios.create');
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
    public function show()
    {
        return view('boolfolios.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('boolfolios.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boolfolio $boolfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boolfolio $boolfolio)
    {
        //
    }
}
