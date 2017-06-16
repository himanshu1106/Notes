<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note; 

class NotesController extends Controller
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
    
    public function createNote($notebookId)
      {
        
       return view('Notes.create',compact('notebookId')); 
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataInput= $request->all();
       $notebookId=$request->notebook_id;
        Note::create($dataInput);
        
        return redirect()->route('notebooks.show',compact('notebookId'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $note=Note::find($id);
        return view('notes.show',compact('note'));

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
        $note=Note::find($id);
        return view('notes.edit',compact('note'));

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
        $dataInput= $request->all();
        $note=Note::find($id);
        $note->update($dataInput);
       
        return redirect()->route('notebooks.show',$note->notebook_id);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Note::destroy($id);
        return back();

    }
}
