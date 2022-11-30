<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();

        return view('members.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $member = Member::create(array_merge($request->except('region', 'country'), ['region_id' => $request->region, 'country_id' => $request->country]));
        return redirect()->route('members.index')->with('success', 'Member Created Successfully');
    }

    public function getMembersByRegion($region){

        $region = Region::where('slug', $region)->firstOrFail();

        $countries = Country::where('region_id', $region->id)->get();

        return view('members-country', compact('countries', 'region'));
    }

    public function getMembersByCountry($country){

        $country = Country::where('name', $country)->firstOrFail();

        $members = Member::where('country_id', $country->id)->get();

        return view('members-list', compact('members', 'country'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }


    public function getCountries($id){
        $countries = Country::where('region_id', $id)->get(['id', 'name']);
        return response()->json($countries);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $regions = Region::all();

        return view('members.edit', compact('regions', 'member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $member->update(array_merge($request->except('region', 'country'), ['region_id' => $request->region, 'country_id' => $request->country]));
        return redirect()->route('members.index')->with('success', 'Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member Deleted');
    }
}
