<x-layouts.adminlayout>
    <div class="p-8 max-w-6xl mx-auto">
        
        <div class="flex items-center justify-between mb-6">
            <a href="{{ route("dashboard") }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 transition-colors group">
                <i class="fas fa-chevron-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                <span class="font-semibold">Back to Leads</span>
            </a>


        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8 mb-6">
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="flex flex-col items-center gap-4">
                    <!-- IMAGE LOGIC START -->
                    @if($leads->image)
                        <img src="{{ asset('storage/' . $leads->image) }}" alt="{{ $leads->name }}" 
                             class="w-24 h-24 rounded-2xl object-cover shadow-lg border border-slate-200">
                    @else
                        <div class="w-24 h-24 bg-gradient-to-tr from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                            {{ strtoupper(substr($leads->name, 0, 1)) }}
                        </div>
                    @endif
                    <!-- IMAGE LOGIC END -->
                    
                    <span class="px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest border 
                        {{ $leads->status == 'warm' ? 'bg-orange-50 text-orange-600 border-orange-200' : 'bg-blue-50 text-blue-600 border-blue-200' }}">
                        {{ $leads->status }}
                    </span>
                </div>

                <div class="flex-1">
                    <div class="mb-4">
                        <h2 class="text-3xl font-extrabold text-slate-900">{{ $leads->name }}</h2>
                        <p class="text-lg text-slate-500 font-medium">{{ $leads->companyName ?? 'Independent Pro' }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-12">
                        <div class="flex items-center gap-3 text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-slate-400"><i class="fas fa-envelope"></i></div>
                            <span class="text-sm">{{ $leads->email ?? 'No email provided' }}</span>
                        </div>
                        <div class="flex items-center gap-3 text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-slate-400"><i class="fas fa-phone"></i></div>
                            <span class="text-sm">{{ $leads->phone ?? 'No phone provided' }}</span>
                        </div>
                        <div class="flex items-center gap-3 text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-slate-400"><i class="fab fa-linkedin"></i></div>
                            <a href="{{ $leads->userLinkedin }}" target="_blank" class="text-sm text-blue-600 hover:underline">View LinkedIn Profile</a>
                        </div>
                        <div class="flex items-center gap-3 text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-slate-400"><i class="fas fa-map-marker-alt"></i></div>
                            <span class="text-sm">{{ $leads->address ?? 'No address' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-gray-100 bg-gray-50/50">
                        <h3 class="font-bold text-slate-800">Internal Notes</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-slate-600 leading-relaxed bg-yellow-50 p-4 rounded-xl border border-yellow-100 italic">
                            "{{ $leads->note ?? 'No notes recorded for this lead yet.' }}"
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-bold text-slate-800 mb-4">Tracking Information</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Lead Source</p>
                            <p class="text-sm font-semibold mt-1">{{ $leads->source }}</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Slug ID</p>
                            <p class="text-sm font-mono text-slate-500 mt-1">{{ $leads->slug }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                    <h3 class="font-bold text-slate-800 mb-6">Company Profile</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="text-xs font-bold text-slate-400 uppercase">Website</label>
                            <a href="{{ $leads->companyWebsite }}" target="_blank" class="block text-sm text-blue-600 font-medium truncate hover:underline">
                                {{ $leads->companyWebsite ?? 'Not provided' }}
                            </a>
                        </div>
                        <div>
                            <label class="text-xs font-bold text-slate-400 uppercase">Company Email</label>
                            <p class="text-sm text-slate-700 font-medium">{{ $leads->companyEmail ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <label class="text-xs font-bold text-slate-400 uppercase">Company LinkedIn</label>
                            <a href="{{ $leads->companyLinkedin }}" target="_blank" class="block text-sm text-blue-600 font-medium hover:underline">
                                View Company Page
                            </a>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-100">
                    
                    <div class="bg-slate-50 rounded-xl p-4">
                        <p class="text-xs text-slate-500 text-center italic">Assigned User ID: {{ $leads->user_id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</x-layouts.adminlayout>