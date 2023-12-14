<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\TeamInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
class TeamInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trunament_teams = TeamInfo::get();
        return view('backend.trunament-team.index', compact('trunament_teams'));
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
    public function tech_web_gaming_team_registation_store(Request $request): RedirectResponse
    {
        $input = $request->all();

        $user = User::create([
            'name' => $input['tournament_name'],
            'email' => $input['email'],
            'role' => 'user',
            'phone' => $input['number'], //this was updated by me;
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('backend/teamlogo/', $image_name);
            $input['logo'] = 'backend/teamlogo/' . $image_name;
        }
        $input = $request->except('password');
        TeamInfo::create($input);

        $notification = [
            'message' => 'Ragistation Successfully!',
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
        $trunaments = Blog::where('recent_activity', 0)->get();
        return view('frontend.registation.index', compact('trunaments'));
    }
}
