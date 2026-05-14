<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateLeadRequest;
use App\Mail\WelcomeUser;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lead = Lead::latest()->get();
        return view("admin.lead.dashboard", compact("lead"));
    }
    public function detail(Lead $leads)
    {

        return view("admin.lead.detail", compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.lead.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => ["required"],
            "email" => ["required"],
            "phone" => ["required"],
            "note" => ["required"],
            "address" => ["required"],
            "status" => ["required"],
            "source" => ["required"],
            "companyName" => ["required"],
            "companyWebsite" => ["required"],
            "companyLinkedin" => ["required"],
            "companyEmail" => ["required"],
            "userLinkedin" => ["required"],
            "image" => ["required"],
        ]);
        // dd($request);
        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $count = 1;

        while (Lead::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();
            $image->storeAs('postImages', $imageName, "public");
            $imagePath = ("postImages/" . $imageName);
        } else {
            $imagePath = null;
        }



        Lead::create([
            "user_id" => auth()->id(),
            "slug" => $slug,
            "image" => $imagePath,

            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "note" => $request->note,
            "address" => $request->address,
            "status" => $request->status,
            "companyName" => $request->companyName,
            "source" => $request->source,
            "companyWebsite" => $request->companyWebsite,
            "companyLinkedin" => $request->companyLinkedin,
            "companyEmail" => $request->companyEmail,
            "userLinkedin" => $request->userLinkedin,
        ]);

        return redirect()->route('dashboard')->with('success', 'CRM is added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        return view('admin.lead.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {

        $request->validate([
            "name" => ["required"],
            "email" => ["required"],
            "phone" => ["required"],
            "note" => ["required"],
            "address" => ["required"],
            "status" => ["required"],
            "source" => ["required"],
            "companyName" => ["required"],
            "companyWebsite" => ["required"],
            "companyLinkedin" => ["required"],
            "companyEmail" => ["required"],
            "userLinkedin" => ["required"],
        ]);

        $data = [
            'slug' => \Str::slug($request->name),
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "note" => $request->note,
            "address" => $request->address,
            "status" => $request->status,
            "companyName" => $request->companyName,
            "source" => $request->source,
            "companyWebsite" => $request->companyWebsite,
            "companyLinkedin" => $request->companyLinkedin,
            "companyEmail" => $request->companyEmail,
            "userLinkedin" => $request->userLinkedin,
        ];

        // Handle image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image if exists
            if ($lead->image && \Storage::disk('public')->exists($lead->image)) {
                \Storage::disk('public')->delete($lead->image);
            }
            $imagePath = $request->file('image')->store('leads', 'public');
            $data['image'] = $imagePath;
        }

        $lead->update($data);
        return redirect()->route('dashboard')->with('success', 'CRM is updated.');


        $data = [
            'slug' => Str::slug($request->name),
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "note" => $request->note,
            "address" => $request->address,
            "status" => $request->status,
            "companyName" => $request->companyName,
            "source" => $request->source,
            "companyWebsite" => $request->companyWebsite,
            "companyLinkedin" => $request->companyLinkedin,
            "companyEmail" => $request->companyEmail,
            "userLinkedin" => $request->userLinkedin,
        ];
        $lead->update($data);
        return redirect()->route('dashboard')->with('success', 'CRM is updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('dashboard')->with('deleted', 'CRM deleted successfully.');
    }
    public function sendEmail()
    {
        $name = $user?->name ?? 'User';

        Mail::to("shahzadfarooqdev@gmail.com")->send(new WelcomeUser($name));

        return "Email sent successfully!";
    }
}
