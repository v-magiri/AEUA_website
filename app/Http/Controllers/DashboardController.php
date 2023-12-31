<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Event;
use App\Models\Concern;
use App\Models\EntreprenuershipQuestion;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetch Data for the Dash board
        $members=Member::count();

        $current=new Carbon();

        $threeMonthAgo=$current::now()->subMonths(3);


        $involvementCount=EntreprenuershipQuestion::where('created_at','>=',$threeMonthAgo)->count();

        $concernCount=Concern::where('created_at','>=',$threeMonthAgo)->count();

        $currentDate = now()->format('Y-m-d');

        $eventsCount=Event::where('event_date','>',$currentDate)->count();

        $events=Event::where('event_date','>',$currentDate)
                ->orderBy('event_date')
                ->take(5)
                ->get();

        return view('dashboard',compact('members','eventsCount','events','involvementCount','concernCount'));
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
