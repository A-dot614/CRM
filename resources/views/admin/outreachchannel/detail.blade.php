<x-layouts.adminlayout>
    <div class="p-8 space-y-6">
        <!-- BACK BUTTON & HEADER -->
        <div class="flex items-center gap-4">
            <a href="{{ route('outreachchannel.index') }}" class="p-2.5 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
                <i class="fas fa-arrow-left text-sm"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Channel Details</h1>
                <p class="text-sm text-slate-500">Viewing configuration for {{ $outreachchannel->name }}</p>
            </div>
        </div>

        <div class="max-w-3xl">
            <!-- DETAIL CARD -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                <!-- Card Header -->
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/30">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-100">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">{{ $outreachchannel->name }}</h3>
                            <span class="text-xs text-slate-400 font-medium tracking-wider uppercase">ID: #{{ $outreachchannel->id ?? 'N/A' }}</span>
                        </div>
                    </div>
                    
                    @php
                        $statusClass = $outreachchannel->status == 'active' 
                            ? 'bg-green-100 text-green-600 border-green-200' 
                            : 'bg-red-100 text-red-600 border-red-200';
                    @endphp
                    <span class="px-3 py-1.5 text-xs font-bold uppercase rounded-lg border {{ $statusClass }}">
                        {{ $outreachchannel->status }}
                    </span>
                </div>

                <!-- Card Body -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Column 1 -->
                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Channel Name</label>
                            <p class="text-slate-700 font-semibold">{{ $outreachchannel->name }}</p>
                        </div>

                        <!-- Column 2 -->
                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Status</label>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 rounded-full {{ $outreachchannel->status == 'active' ? 'bg-green-500' : 'bg-red-500' }}"></div>
                                <p class="text-slate-700 font-semibold capitalize">{{ $outreachchannel->status }}</p>
                            </div>
                        </div>

                        <!-- Full Width Row -->
                        <div class="col-span-1 md:col-span-2 pt-6 border-t border-gray-50 space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Created Date</label>
                            <p class="text-slate-700 font-medium">
                                <i class="far fa-calendar-alt mr-2 text-slate-300"></i>
                                {{ $outreachchannel->created_at->format('M d, Y') }} 
                                <span class="text-slate-300 mx-2">at</span>
                                {{ $outreachchannel->created_at->format('H:i A') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Action Footer -->
                <div class="px-8 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-end gap-3">
                    <button class="px-4 py-2 text-sm font-bold text-slate-600 hover:text-red-600 transition">
                        Delete
                    </button>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white text-sm font-bold rounded-xl hover:bg-blue-700 transition shadow-md shadow-blue-100">
                        Edit Channel
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>