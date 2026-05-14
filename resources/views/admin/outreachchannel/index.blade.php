<x-layouts.adminlayout>
    <div class="p-8 space-y-8">
        <!-- HEADER SECTION -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Outreach Channels</h1>
                <p class="text-sm text-slate-500">Manage your communication platforms and integration status</p>
            </div>
            <a href="{{ route('outreachchannel.create') }}" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center gap-2 text-sm font-semibold">
                <i class="fas fa-plus text-xs"></i> Add New Channel
            </a>
        </div>

        <!-- MESSAGE SECTION -->
        @if(session('success'))
        <div class="flex items-center p-4 mb-4 text-green-800 rounded-2xl bg-green-50 border border-green-100 shadow-sm" role="alert">
            <i class="fas fa-check-circle mr-3"></i>
            <div class="text-sm font-medium">
                {{ session('success') }}
            </div>
        </div>
        @endif

        @if(session('error'))
        <div class="flex items-center p-4 mb-4 text-red-800 rounded-2xl bg-red-50 border border-red-100 shadow-sm" role="alert">
            <i class="fas fa-exclamation-circle mr-3"></i>
            <div class="text-sm font-medium">
                {{ session('error') }}
            </div>
        </div>
        @endif

        <!-- TABLE SECTION -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="text-lg font-bold text-slate-900">All Channels</h2>
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Search channels..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none transition">
                    <i class="fas fa-search absolute left-3.5 top-3 text-gray-400 text-xs"></i>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left whitespace-nowrap">
                    <thead class="bg-gray-50/50 text-slate-500 uppercase text-[11px] font-bold tracking-widest">
                        <tr>
                            <th class="px-6 py-4">Channel Name</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($outreachchannels as $item)
                        <tr class="hover:bg-blue-50/30 transition group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 font-bold text-xs uppercase">
                                        {{ substr($item->name, 0, 2) }}
                                    </div>
                                    <span class="text-sm font-bold text-slate-900">{{ $item->name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusClass = $item->status == 'active' 
                                        ? 'bg-green-100 text-green-600 border-green-200' 
                                        : 'bg-red-100 text-red-600 border-red-200';
                                @endphp
                                <span class="px-2.5 py-1 text-[10px] font-bold uppercase rounded-md border {{ $statusClass }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <!-- View Details -->
                                    <a href="{{ route('outreachchannel.show', $item) }}" title="View Details" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-indigo-600 transition">
                                        <i class="fas fa-eye text-xs"></i>
                                    </a>
                                    
                                    <!-- Edit Button -->
                                    <a href="{{ route("outreachchannel.edit",$item) }}" title="Edit" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-blue-600 transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('outreachchannel.destroy', $item) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this channel?')">
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
                            <td colspan="3" class="px-6 py-10 text-center text-slate-400 text-sm italic">
                                No outreach channels configured yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- FOOTER -->
            <div class="p-4 bg-gray-50 border-t border-gray-100">
                <p class="text-xs text-slate-500">Total Channels: {{ $outreachchannels->count() }}</p>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>