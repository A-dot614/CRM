<x-layouts.adminlayout>
    <div class="p-8 space-y-6">
        <div class="flex items-center gap-4">
            <a href="{{ route('outreachchannel.index') }}" class="p-2.5 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
                <i class="fas fa-arrow-left text-sm"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Edit Channel</h1>
                <p class="text-sm text-slate-500">Update configuration for {{ $outreachchannel->name }}</p>
            </div>
        </div>

        <div class="max-w-3xl">
            <form action="{{ route('outreachchannel.update', $outreachchannel) }}" method="POST" class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                @csrf
                @method('PUT')

                <div class="px-8 py-6 border-b border-gray-100 bg-gray-50/30">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-100">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">Channel Settings</h3>
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wider">Modify the fields below to update the channel</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Channel Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <i class="fas fa-tag text-xs"></i>
                            </span>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                value="{{ old('name', $outreachchannel->name) }}"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none text-slate-700 font-medium"
                                placeholder="Enter channel name..."
                                required
                            >
                        </div>
                        @error('name')
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="status" class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Channel Status</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <i class="fas fa-toggle-on text-xs"></i>
                            </span>
                            <select 
                                name="status" 
                                id="status" 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none text-slate-700 font-medium appearance-none"
                            >
                                <option value="active" {{ old('status', $outreachchannel->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $outreachchannel->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                        @error('status')
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100 flex gap-3">
                        <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                        <p class="text-sm text-blue-700 leading-relaxed">
                            Changing the status to <strong>Inactive</strong> will pause all ongoing outreach campaigns associated with this channel immediately.
                        </p>
                    </div>
                </div>

                <div class="px-8 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-end gap-3">
                    <a href="{{ route('outreachchannel.show', $outreachchannel->id) }}" class="px-6 py-2.5 text-sm font-bold text-slate-500 hover:text-slate-700 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-2.5 bg-blue-600 text-white text-sm font-bold rounded-xl hover:bg-blue-700 transition shadow-md shadow-blue-100 flex items-center gap-2">
                        <i class="fas fa-save text-xs"></i>
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.adminlayout>