<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BirthDay;

class BirthDayController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.birthday_create');
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
        $messages = [
            'fullname.required' => 'Este campo es requerido',
            'bd.required' => 'Este campo es requerido'
        ];

        $this->validate(request(),[
            'fullname' => 'required',
            'bd' => 'required'
        ],$messages);

        $bd = new BirthDay;

        $bd->fullname = $request->fullname;
        $bd->bd = $request->bd;
        $success = $bd->save();

        if($success){
            $request->session()->flash('success','¡Cumpleaños registrado!'); 
        }else{
            $request->session()->flash('success','Operación fallida!'); 
        }

        return redirect()->route('birthday.create');

    }

    public function list(){
        $bds = BirthDay::all();
        return view('admin.birthday_list',compact('bds'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
