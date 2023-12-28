<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\PageTitle;
use App\Models\WebsiteLink;

class ContactController extends Controller
{
    public function tech_web_contact_us()
    {
        $PageTitle = PageTitle::where('page', 7)->get();
        $contact = WebsiteLink::latest()->first();

        return view('frontend.contact.index', compact('contact', 'PageTitle'));
    } //end method------------------------------------

    public function tech_web_contactdata_store(Request $request)
    {
        $request->validate([
            'name_english' => 'required|max:200',
            'email' => 'required|unique:users|max:200',
            'phone' => 'required|unique:users|max:200',
            'message_english' => 'required',
        ]);
        ContactUs::insert([
            'name_english' => $request->name_english,
            'name_bangla' => $request->name_bangla,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject_english' => $request->subject_english,
            'subject_bangla' => $request->subject_bangla,
            'message_english' => $request->message_english,
            'message_bangla' => $request->message_bangla,

            'created_at' => now(),
        ]);
        $notification = [
            'message' => 'Your Message Sent Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }
}
