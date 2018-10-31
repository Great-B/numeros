<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Exceptions\ContactException;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        try{
                $this->validate($request, [
                  'name' => 'required',
                  'email' => 'required|email',
                  'phone' => 'required',
                  'companyName' =>'required',
                  'subject' => 'required',
                  'message' => 'required'
                ]);


                Mail::send('pages.mailtemplate',
                array(
                  'name' => $request->get('name'),
                  'email' => $request->get('email'),
                  'phone' => $request->get('phone'),
                  'visitormessage' => $request->get('message')), function($message){
                    $message->from('bisiadesujo@yahoo.com');
                    $message->to('bisiadesujo@gmail.com', 'Admin')->subject('Numeros Technologies');

                  });
                  Contact::create($request->all());
                return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you!');
            }
            catch (Exception $exception)
            {
              throw new ContactException($exception->getMessage());
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        return view('pages.contact');
    }

    public function again(Contact $contact)
    {
        //
        return view('pages.contact');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
