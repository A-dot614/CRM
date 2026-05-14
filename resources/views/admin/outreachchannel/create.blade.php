<x-layouts.adminlayout>
    <div class="p-8 max-w-2xl mx-auto">
        <!-- BACK BUTTON -->
        <div class="mb-6">
            <a href="{{ route('outreachchannel.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 transition-colors group">
                <i class="fas fa-chevron-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                <span class="font-semibold">Back to Channels</span>
            </a>
        </div>

        <!-- FORM CARD -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/30">
                <h2 class="text-lg font-bold text-slate-900">Create New Channel</h2>
                <p class="text-xs text-slate-500 font-medium">Set up a new communication platform for your outreach</p>
            </div>

            <form action="{{ route('outreachchannel.store') }}" method="POST" class="p-8 space-y-6">
                @csrf
                
                <!-- CHANNEL NAME -->
                <div>
                    <label class="block text-sm font-semibold mb-2 text-slate-700">Channel Name <span class="text-red-500">*</span></label>
                    <input type="text" 
                           name="name" 
                           value="{{ old('name') }}" 
                           placeholder="Enter channel name" 
                           class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition" 
                           required>
                    @error('name') 
                        <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-wider">{{ $message }}</p> 
                    @enderror
                </div>

                <!-- CHANNEL STATUS -->
                <div>
                    <label class="block text-sm font-semibold mb-2 text-slate-700">Initial Status</label>
                    <div class="relative">
                        <select name="status" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none appearance-none transition cursor-pointer" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E'); background-position: right 1rem center; background-size: 1.2em; background-repeat: no-repeat;">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    @error('status') 
                        <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-wider">{{ $message }}</p> 
                    @enderror
                </div>

                <!-- FORM ACTIONS -->
                <div class="pt-4 flex items-center justify-end gap-3 border-t border-gray-100">
                    <a href="{{ route('outreachchannel.index') }}" class="px-6 py-2.5 text-sm font-bold text-slate-500 hover:text-slate-700 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-2.5 bg-blue-600 text-white text-sm font-bold rounded-xl hover:bg-blue-700 shadow-lg shadow-blue-200 transition flex items-center gap-2">
                        <i class="fas fa-check text-xs"></i>
                        Save Channel
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.adminlayout>