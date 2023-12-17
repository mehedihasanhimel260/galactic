<?php

namespace App\Http\Controllers;

use App\Models\PersoneRanking;
use Illuminate\Http\Request;

class PersoneRankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        PersoneRanking::create($request->all());

        return redirect()
            ->route('ranking.index')
            ->with('success', 'Persone data submit successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PersoneRanking $personeRanking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersoneRanking $personeRanking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersoneRanking $personeRanking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trunamentRanking = PersoneRanking::find($id);
        $trunamentRanking->delete();
        return redirect()->back();
    }
}
