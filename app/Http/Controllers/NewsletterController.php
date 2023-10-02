<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Log;

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

                $document->move('uploads/newsletters/',$filename);

                $newsletter=Newsletter::create([
                    'title'=>$validatedData['title'],
                    'issued_by'=>$validatedData['issued_by'],
                    'issued_on'=>$validatedData['issued_on'],
                    'document_path'=>$filename
                ]);

                $newsletter->save();

                $perPage=25;
                $newsletters=Newsletter::orderBy('created_at','desc')->paginate($perPage);

                return view('newsletter',compact('newsletters'))->with('success','Event Successfully Added');
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
        $newsletter=Newsletter::findOrFail($id);
        return view('modals.newsletter',compact('newsletter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $newsletter=Newsletter::findOrFail($id);
        return view('modals.edit-newsletter',compact('newsletter'));
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
        $newsletter=Newsletter::findOrFail($id);
        if(!$newsletter){
            abort(404);
            return redirect()->route('newsletter')->with('error','Newsletter Does Not Exist');
        }
        $newsletter->delete();
    
        return redirect()->route('newsletter')->with('success','Newsletter Deleted Successfully');
    }

    public function getNewsletters(){
        $newsletters=Newsletter::orderBy('created_at', 'desc')->take(3)->get();
        return view('web.newsletter-web',compact('newsletters'));
    }

    public function downloadNewsletter(string $id){
        $newsletter=Newsletter::findOrFail($id);

        if($newsletter){
            $filePath = public_path('uploads/newsletters/' . $newsletter->document_path);
            if (file_exists($filePath)) {
                return response()->file($filePath)->deleteFileAfterSend(true);;
            } else {
                Log::info('File not Found'.$filePath);
                return redirect()->back()->with('error', 'File not found.');
            }
        }
    }
}
