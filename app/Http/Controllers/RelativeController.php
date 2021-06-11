<?php

namespace App\Http\Controllers;

use App\Models\Relative;
use Illuminate\Http\Request;

class RelativeController extends Controller
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
        return view('relatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Relative::create($this->validateRelative($request));

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function show(Relative $relative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function edit(Relative $relative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relative $relative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relative $relative)
    {
        //
    }

    protected function validateRelative(Request $request){
        return $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'phone_number' => 'required|digits:9'
        ]);
    }
}
