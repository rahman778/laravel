<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index',['members'=>$members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'address' =>'required',
            'Tp' =>'required',
            'position' =>'required',
            'joined_at' =>'required',
        ]);
        

        $member = Member::create([
            'name' => request('name'),
            'address' => request('address'),
            'Tp' => request('Tp'),
            'position' => request('position'),
            'joined_at' => request('joined_at'),
                                ]);

        return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $member = Member::find($member->id);
        return view('members.edit',['member'=>$member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        
        Member::where('id', $member->id)
                                ->update([
                                        'name'=> $request->input('name'),
                                        'address' => $request->input('address'),
                                        'Tp' => $request->input('Tp'),
                                        'position' => $request->input('position'),
                                        'joined_at' => $request->input('joined_at')
                                ]);
        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member = Member::find($member->id)->delete();
        return redirect('/members');
    }
}
