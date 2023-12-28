<?php

namespace App\Http\Controllers;

use App\Models\PlayerRanking;
use Illuminate\Http\Request;

class PlayerRankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PlayerRanking = PlayerRanking::get();
        return view('backend.player-ranking.index', compact('PlayerRanking'));
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
        PlayerRanking::create($request->all());
        $notification = [
            'message' => 'info submit Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerRanking $playerRanking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $playerRanking = PlayerRanking::find($id);
        return view('backend.player-ranking.edit', compact('playerRanking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $PlayerRanking = PlayerRanking::find($id);
        $PlayerRanking->update($request->all());

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
        $playerRanking = PlayerRanking::find($id);
        $playerRanking->delete();
        $notification = [
            'message' => 'info deleted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}
