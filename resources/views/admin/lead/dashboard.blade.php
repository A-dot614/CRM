<x-layouts.adminlayout :lead="$lead">
    <div class="p-8 space-y-8"> 
        <!-- HEADER SECTION -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Leads Dashboard</h1>
                <p class="text-sm text-slate-500">Monitor and manage your sales pipeline</p>
            </div>
            <a href="{{route("dashboard.create")}}" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center gap-2 text-sm font-semibold">
                <i class="fas fa-plus text-xs"></i> Add Lead
            </a>
        </div>

<!-- STATS GRID -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
    
    <!-- New Leads -->
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <span class="p-2 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold uppercase tracking-wider">New</span>
            <i class="fas fa-star text-blue-200"></i>
        </div>
        <h3 class="text-3xl font-bold">{{ $lead->where('status', 'New')->count() }}</h3>
    </div>

    <!-- Contacted Leads -->
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <span class="p-2 bg-purple-50 text-purple-600 rounded-lg text-xs font-bold uppercase tracking-wider">Contacted</span>
            <i class="fas fa-paper-plane text-purple-200"></i>
        </div>
        <h3 class="text-3xl font-bold">{{ $lead->where('status', 'Contacted')->count() }}</h3>
    </div>

    <!-- Warm Leads -->
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <span class="p-2 bg-orange-50 text-orange-600 rounded-lg text-xs font-bold uppercase tracking-wider">Warm</span>
            <i class="fas fa-fire text-orange-200"></i>
        </div>
        <h3 class="text-3xl font-bold">{{ $lead->where('status', 'Warm')->count() }}</h3>
    </div>

    <!-- Closed/Qualified Leads -->
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm border-b-4 border-green-500">
        <div class="flex items-center justify-between mb-3">
            <span class="p-2 bg-green-50 text-green-600 rounded-lg text-xs font-bold uppercase tracking-wider">Closed</span>
            <i class="fas fa-check-circle text-green-200"></i>
        </div>
        <h3 class="text-3xl font-bold">{{ $lead->where('status', 'Closed')->count() }}</h3>
    </div>

    <!-- Lost Leads -->
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <span class="p-2 bg-red-50 text-red-600 rounded-lg text-xs font-bold uppercase tracking-wider">Lost</span>
            <i class="fas fa-times-circle text-red-200"></i>
        </div>
        <h3 class="text-3xl font-bold">{{ $lead->where('status', 'Lost')->count() }}</h3>
    </div>

</div>

        <!-- SESSION ALERTS -->
        @if(session('success'))
            <div id="alert-message" class="bg-green-50 border-l-4 border-green-500 p-4 rounded-xl flex items-start gap-4 shadow-sm animate-in fade-in slide-in-from-top-4 duration-300">
                <div class="bg-green-100 p-2 rounded-lg"><i class="fas fa-check-circle text-green-600"></i></div>
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
                <div class="bg-red-100 p-2 rounded-lg"><i class="fas fa-trash-alt text-red-600"></i></div>
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
            <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="text-lg font-bold text-slate-900">Recent Leads</h2>
                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <div class="relative flex-1">
                        <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none transition">
                        <i class="fas fa-search absolute left-3.5 top-3 text-gray-400 text-xs"></i>
                    </div>
                    <button class="p-2.5 bg-gray-50 border border-gray-200 rounded-xl hover:bg-gray-100 transition text-gray-500">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left whitespace-nowrap">
                    <thead class="bg-gray-50/50 text-slate-500 uppercase text-[11px] font-bold tracking-widest">
                        <tr>
                            <th class="px-6 py-4">Lead Info</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Source</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($lead as $item)
                        <tr class="hover:bg-blue-50/30 transition group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <!-- IMAGE LOGIC START -->
                                    @if($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-9 h-9 rounded-lg object-cover border border-slate-200">
                                    @else
                                        <div class="w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center text-slate-500 font-bold text-xs border border-slate-200">
                                            {{ strtoupper(substr($item->name, 0, 2)) }}
                                        </div>
                                    @endif
                                    <!-- IMAGE LOGIC END -->
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">{{ $item->name }}</div>
                                        <div class="text-xs text-slate-500 flex items-center gap-2">
                                            <span>{{ $item->email }}</span>
                                            <span class="text-slate-300">|</span>
                                            <span>{{ $item->phone }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusClasses = [
                                        'new' => 'bg-blue-100 text-blue-600 border-blue-200',
                                        'contacted' => 'bg-purple-100 text-purple-600 border-purple-200',
                                        'warm' => 'bg-orange-100 text-orange-600 border-orange-200',
                                        'closed' => 'bg-green-100 text-green-600 border-green-200',
                                        'lost' => 'bg-red-100 text-red-600 border-red-200',
                                    ];
                                    $class = $statusClasses[$item->status] ?? 'bg-gray-100 text-gray-600';
                                @endphp
                                <span class="px-2.5 py-1 text-[10px] font-bold uppercase rounded-md border {{ $class }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-sm text-slate-600">
                                    @if($item->source == 'LinkedIn')
                                        <i class="fab fa-linkedin text-blue-600"></i>
                                    @elseif($item->source == 'Google')
                                        <i class="fab fa-google text-red-500"></i>
                                    @else
                                        <i class="fas fa-user-tag text-slate-400"></i>
                                    @endif
                                    <span>{{ $item->source }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <a href="{{ route('dashboard.detail', $item->slug) }}" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-indigo-600 transition">
                                        <i class="fas fa-eye text-xs"></i>
                                    </a>
                                    <a href="{{ route('edit',$item->slug) }}" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-blue-600 transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>
                                    <form action="{{ route('delete', $item->slug) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-red-600 transition">
                                            <i class="fas fa-trash text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-slate-400 text-sm italic">
                                No leads found in the database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- PAGINATION -->
            <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                <span class="text-xs text-slate-500 font-medium">Showing entries</span>
                <div class="flex gap-1">
                    <button class="px-3 py-1 bg-white border border-gray-200 rounded text-xs hover:bg-gray-50">Prev</button>
                    <button class="px-3 py-1 bg-blue-600 text-white border border-blue-600 rounded text-xs">1</button>
                    <button class="px-3 py-1 bg-white border border-gray-200 rounded text-xs hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>    
    </div>                
</x-layouts.adminlayout>