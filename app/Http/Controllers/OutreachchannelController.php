<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutreachchannelRequest;
use App\Http\Requests\UpdateOutreachchannelRequest;
use App\Models\Outreachchannel;

class OutreachchannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outreachchannels = Outreachchannel::all();
        return view("admin.outreachchannel.index",compact('outreachchannels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.outreachchannel.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutreachchannelRequest $request)
    {
          $request->validate([
            "name" => ["required"],
            "status" => ["required"], 
          ]);
          
          Outreachchannel::create([
            "name" => $request->name,
            "status" => $request->status,]);
        return redirect()->route("outreachchannel.index")->with("success","Channel added successfully.");

    }

    /**
     * Display the specified resource.
     */
    public function show(Outreachchannel $outreachchannel)
    {
        return view("admin.outreachchannel.detail",compact('outreachchannel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outreachchannel $outreachchannel)
    {
        return view("admin.outreachchannel.edit",compact('outreachchannel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutreachchannelRequest $request, Outreachchannel $outreachchannel)
    {
         $request->validate([
            "name" => ["required"],
            "status" => ["required"], 
          ]);

          $data = [
            "name" => $request->name,
            "status" => $request->status,
          ];
        $outreachchannel->update($data);
        return redirect()->route('outreachchannel.index')->with('success','CRM is updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outreachchannel $outreachchannel)
    {
        $outreachchannel->delete();
        return redirect()->route('outreachchannel.index')->with('deleted', 'CRM deleted successfully.');    }
}
