<?php

namespace App\Http\Controllers;

use App\Models\TeamInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class TeamInfoController extends Controller
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
        $input = $request->all();
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('backend/teamlogo/', $image_name);
            $input['logo'] = 'backend/teamlogo/' . $image_name;
        }

        TeamInfo::create($input);
        $notification = [
            'message' => 'Message Send Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamInfo $teamInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamInfo $teamInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamInfo $teamInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamInfo $teamInfo)
    {
        //
    }
    public function tech_web_gaming_team_registation()
    {
        return view('frontend.registation.index');
    }
}
