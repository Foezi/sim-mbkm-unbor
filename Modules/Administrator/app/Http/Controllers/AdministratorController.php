<?php

namespace Modules\Administrator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::debug("Test log debug");
        // Log::notice("Test log notice");
        // Log::info("Test log info");
        // Log::alert("Test log alert");
        // Log::warning("Test log warning");
        // Log::error("Test log error");
        // Log::critical("Test log critical");
        // Log::emergency("Test log emergency");

        return view('administrator::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('administrator::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('administrator::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
