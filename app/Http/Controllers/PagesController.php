<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function welcome(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function info(){
        if (\Auth::guest()){
            return view('/');
        }
        $id = \Auth::user()->id;
        $languages = \App\languages::all();
        $courses = \App\courses::all();
        return view('info')->with(compact('languages'))->with(compact('courses'));
    }
    public function auth(){
        return view('auth.login');
    }
    public function updateInfo($id, Request $request)
    {
        //get data for table
        $info = \App\User::findorfail($id);

        $info->name = $request->name;
        $info->language = $request->language;
        $info->class = $request->class;
        $info->teamstyle = $request->teamstyle;

        //redirect to info
        return redirect ('auth.info');
    }
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
