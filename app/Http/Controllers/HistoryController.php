<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = History::orderBy('id', 'desc')->paginate(10);
        return view('histories.histories', ['histories' =>$histories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('histories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | min: 4',
            'details' => 'required | min: 10'
        ]);
       History::create([
           'title' =>$request->title,
           'details' =>$request->details,
       ]);
       session()->flash('message', 'your Histories has been successfully added');
       return redirect(route('histories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        return view('histories.show', ['history' => $history]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //return view('histories.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        /*
        $history->title = $request->title;
        $history->details = $request->details;
        $history->save();
        session()->flash('message', 'your History has been successfully updated');
        return redirect()->back();
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        /*
        $history->delete();
        session()->flash('message', 'your history has been deleted');
        return redirect(route('histories.index'));
        */
    }
}
