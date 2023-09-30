<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concern;

class ConcernController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perPage=25;
        $concerns=Concern::orderBy('created_at','desc')->paginate($perPage);
        return view('concerns',compact('concerns'));
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
            try{

                $validateData=$request->validate([
                    'name'=>'required|string',
                    'email'=>'required|string',
                    'message'=>'required|string',
                    'member_name'=>'required|string',
                ]);
    
                $concern=Concern::create($validateData);
    
                $successMessage="Message Recorded";
                return redirect('/contact')->with('success',$successMessage);
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
