<?php

namespace MVF\Http\Controllers;

use Illuminate\Http\Request;
use MVF\Trick;
//use App\Http\Controllers\Controller;


class TricksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tricks=Trick::get();
        //$tricks=Trick::where('style','lower');
        //return view('inicio');
        //return view('lower')->with('hernan',$tricks);
        return view('/tricks',['tricks'=>$tricks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/create');
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
        $tricks=new Trick();
        $tricks->name=request('name');
        $tricks->initials=request('initials');
        $tricks->style=request('style');
        $tricks->description=request('description');
        $tricks->save();
        //
        return view('/inicio');
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
        $trick=Trick::find($id);
        //return view('/tricks');
        return view('show',['trick'=>$trick]);
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
        $trick=Trick::find($id);
        return view('/register')->with('trick',$trick);
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
        $trick=Trick::find($id);
        $trick->name=request('name');
        $trick->initials=request('initials');
        $trick->style=request('style');
        $trick->description=request('description');
        $trick->save();
        $tricks=Trick::get();
        return view('/tricks',['tricks'=>$tricks]);
        //return redirect()->route('lower');
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
        $trick=Trick::find($id);
        $trick->delete();
        $tricks=Trick::get();
        return view('/tricks',['tricks'=>$tricks]);
    }
}
