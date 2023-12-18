<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PersoneRanking;
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
        $trunamentRanking = TrunamentRanking::with('TeamInfo', 'trunament')
            ->orderBy('ranking_number', 'DESC')
            ->get();
        $persontrunamentRanking = PersoneRanking::with('TeamInfo', 'trunament')
            ->orderBy('ranking_number', 'DESC')
            ->get();
        return view('backend.ranking.index', compact('trunamentRanking', 'tournaments', 'persontrunamentRanking'));
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
    public function edit(TrunamentRanking $trunamentRanking, $id)
    {
        $tournaments = Blog::where('recent_activity', 0)->get();
        $trunamentRanking = TrunamentRanking::with('TeamInfo')
            ->find($id)
            ->first();
        return view('backend.ranking.edit', compact('trunamentRanking', 'tournaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trunamentRanking = TrunamentRanking::find($id);
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
        $trunamentRanking = TrunamentRanking::find($id);
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
