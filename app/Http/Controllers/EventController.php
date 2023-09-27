<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perPage=25;

        $events=Event::orderBy('created_at','desc')->paginate($perPage);


        return view('events',compact('events'));
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
            $eventData=$request->validate([
                'theme'=>'required|string',
                'location'=>'required|string',
                'event_date'=>'required|string',
                'description'=>'required|string',
            ]);

            // dd($eventData);
                // Upload and store the image
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;

                $file->move('uploads/events/',$filename);
                $eventData['image_path']=$filename;
            }
    
            $event=Event::create($eventData);

            $event->save();

            return response()->json(['message' => 'Data saved successfully']);
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
