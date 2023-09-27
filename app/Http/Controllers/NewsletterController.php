<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perPage=25;
        $newsletters=Newsletter::orderBy('created_at','desc')->paginate($perPage);
        return view('newsletter',compact('newsletters'));
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
        // save a newsletter 
        try{
                    // Validate the newsletter request
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'issued_on' => 'required|string',
                'issued_by' => 'required|string',
                'document' => 'required|file|mimes:pdf,docx|max:2048',
            ]);

            if($request->hasFile('document')){
                $document=$request->file('document');
                $extension=$document->getClientOriginalExtension();
                $filename=time().'.'.$extension;

                $document->move('uploads/newletters/',$filename);

                $newsletter=Newsletter::create([
                    'title'=>$validatedData['title'],
                    'issued_by'=>$validatedData['issued_by'],
                    'issued_on'=>$validatedData['issued_on'],
                    'document_path'=>$filename
                ]);

                $newsletter->save();

                return response()->json(['message' => 'Data saved successfully']);
            }
            return response()->json(['message' => 'File was not found']);
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
