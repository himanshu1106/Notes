<?php

namespace App\Http\Controllers;

use App\Notebook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NotebooksController extends Controller
{
    public function index()
   {	$user=Auth::user();
    	$notebooks=$user->notebooks;
    	
    	 return view('notebook.index', compact('notebooks'));
    }

    public function create()
    {return view('notebook.create');
    }


     public function show($id)
    {	 
    	$notebook=Notebook::findorFail($id);
    	$notes=$notebook->notes;
    	//return $id;
        return view('notes.check', compact('notes','notebook'));
    }

     public function store(Request $request)
    {
    	$dataInput= $request->all();
    	$user=Auth::user();
    	$user->notebooks()->create($dataInput);

    	//Notebook::create($dataInput);

    	return redirect('/notebook');
    }

     public function edit($id)
    {	$user=Auth::user();
    	$notebook=$user->notebooks()->find($id);	
    	// $notebook=Notebook::where('id',$id)->first();
    	return view('notebook.edit')->with('notebook',$notebook);
    }

    public function update(Request $request,$id)
    {
    	// $notebook=Notebook::where('id',$id)->first();
    	$user=Auth::user();
    	$notebook=$user->notebooks()->find($id);
    	$notebook->update($request->all());
    	return redirect('/notebook');
    } 

    public function destroy(Request $request,$id)
    {
    	// $notebook=Notebook::where('id',$id)->first();
    	$user=Auth::user();
    	$notebook=$user->notebooks()->find($id);
    	$notebook->delete();
    	return redirect('/notebook');
    }
    }
