<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
         //$comments = Comment::all();
        $histories = History::orderBy('id', 'desc')->paginate(7);
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
            'title' => 'bail | required | min: 4',
            'details' => 'bail | required | min: 10'
        ]);
         // Get the currently authenticated user...
         $user = Auth::user();

       History::create([
           'title' =>$request->title,
           'details' =>$request->details,
           'user_id' => auth()->id()
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
        return view('histories.edit', compact('history'));
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
        $history->title = $request->title;
        $history->details = $request->details;
        $history->save();
        session()->flash('message', 'your History has been successfully updated');
        return redirect(route('histories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        $history->delete();
        session()->flash('message', 'your history has been deleted');
        return redirect(route('histories.index'));

    }
}
