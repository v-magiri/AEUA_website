<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcernController extends Controller
{
    // save a concern 
    public function saveConcern(Request $request){
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
                
            return redirect('/entreprenuership')->with('success',$successMessage);
        }catch(Exception $e){
            Log::error($e->getMessage());
        }
    }
}
