<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntreprenuershipQuestion;

class InvolvementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $perPage=25;
        $ideas=EntreprenuershipQuestion::orderBy('created_at','desc')->paginate($perPage);
        return view('involvement',compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    // save a concern 
    public function saveInvolvement(Request $request){
        // save an entreprenuership question
        try{
            //
            $data=$request->validate([
                'name'=>'required|string',
                'email'=>'required|string',
                'address'=>'required|string',
                'ideaDescription'=>'required|string'
            ]);

            $idea = EntreprenuershipQuestion::create($data);

            $idea->save();


            $successMessage="Idea Recorded Successfully";
                
            return redirect('/get/involved')->with('success',$successMessage);
        }catch(Exception $e){
            Log::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
