<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Tasaciones;

use Illuminate\Support\Facades\Mail;

use App\Contact;

class PricingsController extends Controller
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
        return view('pricings.create');
    }

    /** 
     * The response to always send back to the frontend 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    protected function formResponse() 
    { 
        return redirect()->back()
            ->withSuccess('Your form has been submitted'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'question' => 'required'
        ]);
        
        if ($request->faxonly) {
            return $this->formResponse();
        }
        $email = new Contact;
        $email->name = request('name');
        $email->email = request('email');
        $email->phone = request('phone');
        $email->question = request('question');

        \Mail::to($email->email)->send(new Tasaciones($email));

        
        
        return redirect('/tasaciones')->with('message', 'Ya recibimos tu solicitud de tasación ¡Muchas gracias!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
