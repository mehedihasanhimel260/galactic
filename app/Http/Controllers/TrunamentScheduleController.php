<?php

namespace App\Http\Controllers;

use App\Models\Round;
use App\Models\Season;
use App\Models\TrunamentSchedule;
use Illuminate\Http\Request;

class TrunamentScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rounds = Round::with('season')->get();
        $trunamentSchedule = TrunamentSchedule::with('round')->get();
        $tournament_season = Season::latest()
            ->take(3)
            ->get();
        return view('backend.trunament-schedule.index', compact('trunamentSchedule', 'rounds', 'tournament_season'));
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
        TrunamentSchedule::create($request->all());

        $notification = [
            'message' => 'Schedule add Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(TrunamentSchedule $trunamentSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trunamentSchedule = TrunamentSchedule::find($id);
        $rounds = Round::get();
        $tournament_season = Season::latest()
            ->take(5)
            ->get();
        return view('backend.trunament-schedule.edit', compact('trunamentSchedule', 'rounds', 'tournament_season'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trunamentSchedule = TrunamentSchedule::find($id);
        $trunamentSchedule->update($request->all());
        $notification = [
            'message' => 'Schedule update Successfully!',
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
        $trunamentSchedule = TrunamentSchedule::find($id);
        $trunamentSchedule->delete();
        $notification = [
            'message' => 'Schedule delete Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}
