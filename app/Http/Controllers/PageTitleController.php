<?php

namespace App\Http\Controllers;

use App\Models\PageTitle;
use Illuminate\Http\Request;

class PageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PageTitle = PageTitle::get();
        return view('backend.page-title.index', compact('PageTitle'));
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
        PageTitle::create($request->all());
        $notification = [
            'message' => 'info Add Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(PageTitle $pageTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $PageTitle = PageTitle::find($id);
        return view('backend.page-title.edit', compact('PageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trunamentRanking = PageTitle::find($id);
        $trunamentRanking->update($request->all());

        $notification = [
            'message' => 'info updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('page-title.index')
            ->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageTitle $pageTitle)
    {
        //
    }
}
