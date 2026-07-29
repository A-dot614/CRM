<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateLeadRequest;
use App\Mail\WelcomeUser;
use App\Models\Lead;
use Illuminate\Support\Facades\Storage;
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            "image" => ["nullable", "image", "mimes:jpeg,png,jpg", "max:2048"],
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

$data = $request->except('image');
    $data['slug'] = \Str::slug($request->name);

    // 2. Image handle karein
    if ($request->hasFile('image')) {
        // Purani image delete karein
        if ($lead->image && \Storage::disk('public')->exists($lead->image)) {
            \Storage::disk('public')->delete($lead->image);
        }

        // Nayi image save karein
        $image = $request->file('image');
        $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();
        $image->storeAs('postImages', $imageName, "public"); // Store folder
        $data['image'] = "postImages/" . $imageName; // DB path
    }

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
