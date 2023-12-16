<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
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
        Round::create($request->all());

        $notification = [
            'message' => 'Round add Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Round $round)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Round $round)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Round = Round::find($id);
        $Round->update($request->all());
        $notification = [
            'message' => 'Round update Successfully!',
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
        $round = Round::find($id);
        $round->delete();
        $notification = [
            'message' => 'Round delete Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}
