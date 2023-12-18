<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PersoneRanking;
use App\Models\TrunamentRanking;
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
            ->back()
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
    public function edit(Request $request, $id)
    {
        $tournaments = Blog::where('recent_activity', 0)->get();
        $trunamentRanking = PersoneRanking::with('TeamInfo')
            ->find($id)
            ->first();
        return view('backend.ranking.editperson', compact('trunamentRanking', 'tournaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trunamentRanking = PersoneRanking::find($id);
        $trunamentRanking->update($request->all());

        $notification = [
            'message' => 'info updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
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
