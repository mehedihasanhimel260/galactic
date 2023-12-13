<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        //
    }
    public function tech_web_gaming_career_apply()
    {
        $blogs = Blog::where('recent_activity', 2)->paginate(4);
        return view('frontend.career.index', compact('blogs'));
    }
    public function tech_web_gaming_career_apply_form()
    {
        $blogs = Blog::where('recent_activity', 2)->paginate(4);
        return view('frontend.career.jobform', compact('blogs'));
    }
    public function tech_web_gaming_career_apply_store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('cv')) {
            $image = $request->file('cv');
            $image_name = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('backend/teamlogo/', $image_name);
            $input['cv'] = 'backend/teamlogo/' . $image_name;
        }

        Career::create($input);
        $notification = [
            'message' => 'Application Send Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}
