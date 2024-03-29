<?php

namespace App\Http\Controllers;
use App\models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    { $contacts = Contact::paginate(3);
        return view('admin.indexmsg', compact('contacts'));
     
    }
    
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('contact');
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
    public function show(string $id)
    {
        $contacts= Contact::findOrFail($id);
       $contacts->update(['unread_count' => 1]);
       return view('admin.showmsg', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id', $id)->delete();
        return redirect('admin/indexmsg');
    }
    public function showmsg(string $id)
    {
       $msg= Contact::findOrFail($id);
       $msg->update(['unread_count' => 1]);
       return view('emails.sample', compact('msg'));
    }
}
