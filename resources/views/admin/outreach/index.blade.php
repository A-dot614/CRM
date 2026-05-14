<x-layouts.adminlayout>
    <div class="p-8 space-y-8">
        <!-- HEADER SECTION -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Outreach History</h1>
                <p class="text-sm text-slate-500">Monitor engagement levels and interaction timelines</p>
            </div>
            <a href="{{ route('outreach.create') }}" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center gap-2 text-sm font-semibold">
                <i class="fas fa-plus text-xs"></i> Log New Outreach
            </a>
        </div>


        <!-- SESSION ALERTS -->
        @if(session('success'))
            <div id="alert-message" class="bg-green-50 border-l-4 border-green-500 p-4 rounded-xl flex items-start gap-4 shadow-sm animate-in fade-in slide-in-from-top-4 duration-300">
                <div class="bg-green-100 p-2 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-bold text-green-900">Success!</h4>
                    <p class="text-xs text-green-700 mt-1">{{ session('success') }}</p>
                </div>
                <button onclick="document.getElementById('alert-message').remove()" class="text-green-400 hover:text-green-600 transition">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>
        @endif

        @if(session('deleted'))
            <div id="delete-alert" class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl flex items-start gap-4 shadow-sm animate-in fade-in slide-in-from-top-4 duration-300">
                <div class="bg-red-100 p-2 rounded-lg">
                    <i class="fas fa-trash-alt text-red-600"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-bold text-red-900">Lead Removed</h4>
                    <p class="text-xs text-red-700 mt-1">{{ session('deleted') }}</p>
                </div>
                <button onclick="document.getElementById('delete-alert').remove()" class="text-red-400 hover:text-red-600 transition">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>
        @endif  

        <!-- TABLE SECTION -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <!-- Search & Filter Bar -->
            <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="text-lg font-bold text-slate-900">Recent Interactions</h2>
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Search leads..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none transition">
                    <i class="fas fa-search absolute left-3.5 top-3 text-gray-400 text-xs"></i>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left whitespace-nowrap">
                    <thead class="bg-gray-50/50 text-slate-500 uppercase text-[11px] font-bold tracking-widest">
                        <tr>
                            <th class="px-6 py-4">Interaction Date</th>
                            <th class="px-6 py-4">Lead ID</th>
                            <th class="px-6 py-4">Channel</th>
                            <th class="px-6 py-4">Engagement Score</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($outreaches as $item)
                        <tr class="hover:bg-blue-50/30 transition group">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="text-sm font-bold text-slate-900">{{ $item->created_at->format('Y-m-d') }}</span>
                                    <span class="text-[10px] text-slate-400 font-medium">{{ $item->created_at->format('Y-m-d') }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold border border-slate-200">
                                    #{{ $item->lead_id }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                                    <span class="text-sm font-semibold text-slate-700">
                                        {{ $item->outreachChannel->name ?? 'Channel '.$item->outreach_channel_id }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-20 bg-gray-100 h-1.5 rounded-full overflow-hidden">
                                        <div class="h-full {{ $item->score >= 70 ? 'bg-green-500' : ($item->score >= 40 ? 'bg-amber-500' : 'bg-red-500') }}" 
                                             style="width: {{ $item->score }}%"></div>
                                    </div>
                                    <span class="text-sm font-bold {{ $item->score >= 70 ? 'text-green-600' : ($item->score >= 40 ? 'text-amber-600' : 'text-red-600') }}">
                                        {{ $item->score }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <a href="{{ route('outreach.show', $item) }}" title="View Details" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-blue-600 transition">
                                        <i class="fas fa-eye text-xs"></i>
                                    </a>
                                    <a href="{{ route("outreach.edit",$item) }}" title="Edit" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-indigo-600 transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>
                                    <form action="{{ route('outreach.destroy', $item) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');" class="inline">
                                       @csrf
                                       @method('DELETE')
                                     <button type="submit" title="Delete" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-red-600 transition">
                                        <i class="fas fa-trash text-xs"></i>
                                     </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center gap-2">
                                    <i class="fas fa-inbox text-slate-200 text-3xl"></i>
                                    <p class="text-slate-400 text-sm italic">No outreach records found.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- FOOTER -->
            <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                <span>Total Logs: {{ $outreaches->count() }}</span>
                <span>System Synchronized</span>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>