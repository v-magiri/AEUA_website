<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\Leader;
use App\Models\ContactPerson;
use App\Models\EntreprenuershipStrategy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perPage=25;
        $members=Member::orderBy('created_at','desc')->paginate($perPage);
        return view('members',compact('members'));
    }

    public function getMembersCount(){
        
        $memberCount=Member::count();
        $names=Member::select('university_name')->get();

        return view('web.home-web',compact('memberCount','names'));
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
                    // Validate the incoming data
                    $validatedData = $request->validate([
                        // Contact Person Details
                        'contact_name' => 'required|string',
                        'contact_title' => 'required|string',
                        'position' => 'required|string',

                        // University Member Details
                        'uni_name' => 'required|string',
                        'schools' => 'required|integer',
                        'students' => 'required|integer',
                        'lecturers' => 'required|integer',
                        'website' => 'required|string',
                        'city' => 'required|string',
                        'uni_email' => 'required|string',
                        'country' => 'required|string',
                        'address' =>'required|string',
                        'year' => 'required|string',
                        'creator'=>'required|string',

                        // University Leader Details
                        'title' => 'required|string',
                        'year_appointed' => 'required|string',
                        'name' => 'required|string',

                        //entreprenuership strategy

                        'strategy' => 'required|string',
                        'entre_proportion' => 'required|integer',
                        'support' => 'required|integer',
                    ]);

                    //save the university leader
                    $leader=Leader::create([
                    'title'=>$validatedData['title'],
                    'year_appointed'=>$validatedData['year_appointed'],
                    'name'=>$validatedData['name'],
                ]);

                //save a contact Person
                $person=ContactPerson::create([
                    'name'=>$validatedData['contact_name'],
                    'title'=>$validatedData['contact_title'],
                    'position'=>$validatedData['position'],
                ]);
                
                //save entreprenuership strategy
                $entreprenuership=EntreprenuershipStrategy::create([
                    'strategy'=>$validatedData['strategy'],
                    'entre_proportion'=>$validatedData['entre_proportion'],
                    'support_frameworks'=>$validatedData['support'],
                ]);

                // save a member 
                $member =Member::create([
                    'university_name'=>$validatedData['uni_name'],
                    'year_founded'=>$validatedData['year'],
                    'number_of_schools'=>$validatedData['schools'],
                    'number_of_students'=>$validatedData['students'],
                    'country'=>$validatedData['country'],
                    'number_of_lecturers'=>$validatedData['lecturers'],
                    'website'=>$validatedData['website'],
                    'city'=>$validatedData['city'],
                    'university_email'=>$validatedData['uni_email'],
                    'address'=>$validatedData['address'],
                    'createdBy'=>$validatedData['creator'],
                ]);

                $member->contactPeople()->save($person);
                $member->leader()->save($leader);
                $member->entreprenuershipStrategy()->save($entreprenuership);
                $member->save();

                $successMessage="Member Registration  Successful";

                return redirect('/member-register')->with('success',$successMessage);
            }catch(Exception $e){
                //in case of error log the errors

                Log::error($e->getMessage());
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $member=Member::findOrFail($id);
        if($member){
            $leader=$member->leader;
            $persons=$member->contactPeople;;
            $entreprenuership=$member->entreprenuershipStrategy;
        }
        return view('modals.member',compact('member','leader','persons','entreprenuership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $member=Member::findOrFail($id);
        if($member){
            $leader=$member->leader;
            $person=$member->contactPeople;
            $entreprenuership=$member->entreprenuershipStrategy;
        }
        Log::info($entreprenuership->support_frameworks);
        return view('modals.edit-member',compact('member','leader','entreprenuership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try{

            // dd($request->all());

                // Validate the incoming data
                $updateData = $request->validate([
                    // Contact Person Details
                    // 'person.contact_name' => 'required|string',
                    // 'person.contact_title' => 'required|string',
                    // 'person.position' => 'required|string',
    
                    // University Member Details
                    'member.uni_name' => 'required|string',
                    'member.schools' => 'required|integer',
                    'member.students' => 'required|integer',
                    'member.lecturers' => 'required|integer',
                    'member.website' => 'required|string',
                    'member.city' => 'required|string',
                    'member.uni_email' => 'required|string',
                    'member.country' => 'required|string',
                    'member.address' =>'required|string',
                    'member.year' => 'required|string',
    
                    // University Leader Details
                    'leader.title' => 'required|string',
                    'leader.year_appointed' => 'required|string',
                    'leader.name' => 'required|string',
    
                    //entreprenuership strategy
    
                    'entreprenuership.strategy' => 'required|string',
                    'entreprenuership.entre_proportion' => 'required|integer',
                    'entreprenuership.support' => 'required|integer',
                ]);
    
            
    
            DB::beginTransaction();
    
            $member=Member::findOrFail($id);
    
            // $contactPersonData=$updateData->input('person');
            $memberData=$updateData['member'];
            $leaderData=$updateData['leader'];
            $entreprenuershipData=$updateData['entreprenuership'];
    
            //update begins here
    
            // $member->contactPeople->update($contactPersonData);
            $member->leader->update($leaderData);
            $member->entreprenuershipStrategy->update($entreprenuershipData);
            $member->update($memberData);

            $member->save();
    
            DB::commit();
    
            return redirect()->route('members')->with('success','Member Details Updated Successfully');
        }catch(Exception $e){
            Log::error($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //
        $member=Member::findOrFail($id);
        if(!$member){
            abort(404);
            return redirect()->route('members')->with('error','Member Does Not Exist');
        }
        $member->delete();
    
        return redirect()->route('members')->with('success','Member Deleted Successfully');
    }

    public function getMembers(){
        $members=Member::all();
        return view('web.about-web',compact('members'));
    }
}
