<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\TeamInfo;
use App\Models\TrunamentRanking;
use Illuminate\Http\Request;

class TrunamentRankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournaments = Blog::where('recent_activity', 0)->get();
        $trunamentRanking = TrunamentRanking::get();
        return view('backend.ranking.index', compact('trunamentRanking', 'tournaments'));
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
        TrunamentRanking::create($request->all());

        return redirect()
            ->route('ranking.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TrunamentRanking $trunamentRanking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrunamentRanking $trunamentRanking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrunamentRanking $trunamentRanking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trunamentRanking=TrunamentRanking::find($id);
        $trunamentRanking->delete();
        return redirect()->back();
    }
    public function get_team_data(Request $request)
    {
        $id = $request->trunament_id;
        $trunamentTeam = TeamInfo::where('tournament_name', $id)->get();
        return response()->json($trunamentTeam);
    }
}