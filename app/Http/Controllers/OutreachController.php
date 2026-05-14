<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutreachRequest;
use App\Http\Requests\UpdateOutreachRequest;
use App\Models\Lead;
use App\Models\Outreach;
use App\Models\Outreachchannel;

class OutreachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outreaches = Outreach::all();
        return view("admin.outreach.index", compact('outreaches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $leads = Lead::all();
        $channels = Outreachchannel::all();
        return view("admin.outreach.create", compact('leads', 'channels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutreachRequest $request)
    {
        $validated = $request->validate([
            'lead_id' => ['required'],
            'outreach_channel_id' => ['required'],
            'date' => ['required'],
            'score' => ['required'],
            'note' => ['required'],
        ]);

        Outreach::create([
            'lead_id' => $request->lead_id,
            'outreach_channel_id' => $request->outreach_channel_id,
            'date' => $request->date,
            'score' => $request->score,
            'note' => $request->note,
        ]);

        return redirect()->route('outreach.index')->with('success', 'Outreach initialized successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Outreach $outreach)
    {
        return view("admin.outreach.detail", compact('outreach'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outreach $outreach)
    {
        $channels = OutreachChannel::where('status', 'active')->get();
        return view('admin.outreach.edit', compact('outreach', 'channels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutreachRequest $request, Outreach $outreach)
    {
        $request->validate([
            'lead_id' => ['required'],
            'outreach_channel_id' => ['required'],
            'date' => ['required'],
            'score' => ['required'],
            'note' => ['required'],
        ]);

        $data = [
            'lead_id' => $request->lead_id,
            'outreach_channel_id' => $request->outreach_channel_id,
            'date' => $request->date,
            'score' => $request->score,
            'note' => $request->note,
        ];
        $outreach->update($data);
        return redirect()->route('outreach.index')->with('success', 'Outreach initialized update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outreach $outreach)
    {
        $outreach->delete();
        return redirect()->route('outreach.index')->with('deleted', 'CRM deleted successfully.');
    }
}
