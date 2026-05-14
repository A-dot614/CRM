<x-layouts.adminlayout>
    <div class="p-8 space-y-6">
        <!-- BACK BUTTON & HEADER -->
        <div class="flex items-center gap-4">
            <a href="{{ route('outreach.index') }}" class="p-2.5 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
                <i class="fas fa-arrow-left text-sm"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Outreach Log Details</h1>
                <p class="text-sm text-slate-500">Record verification for Lead #{{ $outreach->lead_id }}</p>
            </div>
        </div>

        <div class="max-w-4xl">
            <!-- DETAIL CARD -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                <!-- Card Header -->
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/30">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-indigo-100">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">Interaction Log</h3>
                            <span class="text-xs text-slate-400 font-medium tracking-wider uppercase">Record ID: #{{ $outreach->id }}</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-end">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Engagement Score</span>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-black {{ $outreach->score >= 70 ? 'text-green-600' : ($outreach->score >= 40 ? 'text-amber-500' : 'text-red-500') }}">
                                {{ $outreach->score }}
                            </span>
                            <span class="text-slate-300 font-bold">/ 100</span>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Column: Lead -->
                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Associated Lead</label>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-user-tag text-slate-300 text-xs"></i>
                                <p class="text-slate-700 font-bold text-lg">#{{ $outreach->lead_id }}</p>
                            </div>
                        </div>

                        <!-- Column: Channel -->
                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Outreach Channel</label>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-satellite-dish text-slate-300 text-xs"></i>
                                <p class="text-slate-700 font-bold text-lg">
                                    {{ $outreach->outreachChannel->name ?? 'Channel #'.$outreach->outreach_channel_id }}
                                </p>
                            </div>
                        </div>

                        <!-- Column: Date -->
                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Interaction Date</label>
                            <div class="flex items-center gap-2 text-slate-700">
                                <i class="far fa-calendar-check text-slate-300 text-xs"></i>
                                <p class="font-semibold">
                                    {{ $outreach->some_date?->format('Y-m-d') ?? '-' }}
                                    <span class="text-slate-400 font-medium ml-1">{{ $outreach->some_date?->format('Y-m-d') ?? '-' }}</span>
                                </p>
                            </div>
                        </div>

                        <!-- Notes: Full Width -->
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 pt-6 border-t border-gray-50 space-y-3">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest block">Communication Notes</label>
                            <div class="bg-slate-50 border border-slate-100 p-6 rounded-2xl italic text-slate-600 leading-relaxed relative">
                                <i class="fas fa-quote-left absolute top-4 left-4 text-slate-200 text-xl"></i>
                                <p class="pl-6">
                                    {{ $outreach->note ?? 'No additional notes were recorded for this outreach interaction.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Footer -->
                <div class="px-8 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-between items-center">
                    <p class="text-[10px] text-slate-400 font-medium uppercase tracking-tighter">
                        Last Modified: 
                    </p>
                    <div class="flex gap-3">
                        <form action="#" method="POST" onsubmit="return confirm('Archive this record?')">
                            @csrf
                            @method('DELETE')
                            <button class="px-4 py-2 text-sm font-bold text-slate-400 hover:text-red-600 transition">
                                Delete Record
                            </button>
                        </form>
                        <a href="#" class="px-6 py-2 bg-slate-900 text-white text-sm font-bold rounded-xl hover:bg-slate-800 transition shadow-md shadow-slate-200">
                            Edit Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>