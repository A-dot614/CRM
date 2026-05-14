<x-layouts.adminlayout>
    <div class="p-8 max-w-6xl mx-auto">

        <form action="{{ route('update', $lead->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex items-center justify-between mb-6">
                <a href="{{ route('dashboard.detail', $lead->slug) }}"
                    class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 transition-colors group">
                    <i class="fas fa-chevron-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                    <span class="font-semibold">Back to Details</span>
                </a>

                <div class="flex gap-3">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white text-sm font-bold rounded-xl hover:bg-blue-700 transition shadow-md flex items-center gap-2">
                        <i class="fas fa-save text-xs"></i> Save Changes
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2 space-y-6">

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8">
                        <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                            <i class="fas fa-user-edit text-blue-500"></i> Lead Information
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Full Name</label>
                                <input type="text" name="name" value="{{ old('name', $lead->name) }}"
                                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-700"
                                    required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Email
                                    Address</label>
                                <input type="email" name="email" value="{{ old('email', $lead->email) }}"
                                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-700">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Phone
                                    Number</label>
                                <input type="text" name="phone" value="{{ old('phone', $lead->phone) }}"
                                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-700">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">LinkedIn Profile
                                    URL</label>
                                <input type="url" name="userLinkedin"
                                    value="{{ old('userLinkedin', $lead->userLinkedin) }}"
                                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-700"
                                    placeholder="https://linkedin.com/in/...">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Address</label>
                                <input type="text" name="address" value="{{ old('address', $lead->address) }}"
                                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-700">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                        <div class="p-5 border-b border-gray-100 bg-gray-50/50">
                            <h3 class="font-bold text-slate-800">Internal Notes</h3>
                        </div>
                        <div class="p-6">
                            <textarea name="note" rows="4"
                                class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-slate-600 italic bg-yellow-50/30"
                                placeholder="Enter any internal tracking notes here...">{{ old('note', $lead->note) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 text-center">
                        <div class="relative group w-24 h-24 mx-auto mb-4">
                            @if ($lead->image)
                                <img src="{{ asset('storage/' . $lead->image) }}"
                                    class="w-24 h-24 rounded-2xl object-cover border border-slate-200">
                            @else
                                <div
                                    class="w-24 h-24 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-400 text-3xl">
                                    <i class="fas fa-camera"></i>
                                </div>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Update Photo</label>
                            <input type="file" name="image"
                                class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>

                        <div class="text-left">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Lead Status</label>
                            <select name="status"
                                class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 text-sm font-semibold">
                                <option value="new" {{ $lead->status == 'new' ? 'selected' : '' }}>New</option>
                                <option value="contacted" {{ $lead->status == 'contacted' ? 'selected' : '' }}>
                                    Contacted</option>
                                <option value="warm" {{ $lead->status == 'warm' ? 'selected' : '' }}>Warm</option>
                                <option value="closed" {{ $lead->status == 'closed' ? 'selected' : '' }}>Closed
                                </option>
                                <option value="lost" {{ $lead->status == 'lost' ? 'selected' : '' }}>Lost</option>
                            </select>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                        <h3 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                            <i class="fas fa-building text-slate-400"></i> Company Profile
                        </h3>

                        <div class="space-y-4">
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase mb-1 block">Company
                                    Name</label>
                                <input type="text" name="companyName"
                                    value="{{ old('companyName', $lead->companyName) }}"
                                    class="w-full rounded-xl border-slate-200 text-sm">
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase mb-1 block">Website</label>
                                <input type="url" name="companyWebsite"
                                    value="{{ old('companyWebsite', $lead->companyWebsite) }}"
                                    class="w-full rounded-xl border-slate-200 text-sm" placeholder="https://...">
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase mb-1 block">Company
                                    Email</label>
                                <input type="email" name="companyEmail"
                                    value="{{ old('companyEmail', $lead->companyEmail) }}"
                                    class="w-full rounded-xl border-slate-200 text-sm">
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase mb-1 block">Company
                                    LinkedIn</label>
                                <input type="url" name="companyLinkedin"
                                    value="{{ old('companyLinkedin', $lead->companyLinkedin) }}"
                                    class="w-full rounded-xl border-slate-200 text-sm">
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-400 uppercase mb-1 block">Lead
                                    Source</label>
                                <input type="text" name="source" value="{{ old('source', $lead->source) }}"
                                    class="w-full rounded-xl border-slate-200 text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-4 border border-dashed border-slate-200">
                        <p class="text-[10px] font-bold text-slate-400 uppercase text-center mb-1">System Metadata</p>
                        <p class="text-xs text-slate-500 text-center italic">Slug: {{ $lead->slug }}</p>
                        <p class="text-xs text-slate-500 text-center italic">Owner ID: {{ $lead->user_id }}</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.adminlayout>
