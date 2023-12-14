<?php

namespace App\Http\Controllers;

use App\Models\Heros;
use Illuminate\Http\Request;

class HerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Heros::first();
        return view('backend.heros.index',compact('hero'));
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
        $hero = Heros::first();
    
        if ($hero) {
            // If the hero exists, handle the update process
            if ($request->hasFile('heros_image')) {
                // Delete the old image if it exists
                if (file_exists($hero->heros_image)) {
                    unlink($hero->heros_image);
                }
    
                $image = $request->file('heros_image');
                $image_name = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move('backend/teamlogo/', $image_name);
                $input['heros_image'] = 'backend/teamlogo/' . $image_name;
            }
    
            $hero->update($input);
    
            $notification = [
                'message' => 'Heros updated Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()
                ->back()
                ->with($notification);
        } else {
            // Handle the creation of a new hero record if none exists
            // (same as before)
        }
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(Heros $heros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Heros $heros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Heros $heros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Heros $heros)
    {
        //
    }
}
