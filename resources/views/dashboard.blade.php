<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeadFlow CRM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans text-slate-900">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-white hidden lg:flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-slate-800 flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center text-sm">LF</div>
                <span>Lead<span class="text-blue-400">Flow</span></span>
            </div>
            
            <nav class="flex-1 p-4 space-y-1">
                <p class="text-xs font-semibold text-slate-500 uppercase px-3 py-2">Menu</p>
                <a href="#" class="flex items-center space-x-3 p-3 bg-blue-600/10 text-blue-400 rounded-lg border border-blue-600/20">
                    <i class="fas fa-th-large w-5"></i> <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 hover:bg-slate-800 rounded-lg transition text-slate-400 hover:text-white">
                    <i class="fas fa-user-friends w-5"></i> <span>All Leads</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 hover:bg-slate-800 rounded-lg transition text-slate-400 hover:text-white">
                    <i class="fas fa-building w-5"></i> <span>Companies</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center space-x-3 p-3 text-slate-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition group">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="font-medium">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto">
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex justify-between items-center sticky top-0 z-20">
                <div>
                    <h1 class="text-xl font-bold text-slate-800">Sales Dashboard</h1>
                    <p class="text-sm text-slate-500">Welcome back, Admin</p>
                </div>
                
                <div class="flex items-center space-x-6">
                    <a href="{{route("dashboard.create")}}" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center gap-2 text-sm font-semibold">
                        <i class="fas fa-plus"></i> Add Lead
                    </a>
                    
                    <div class="flex items-center space-x-3 border-l pl-6">
                        <button class="relative p-2 text-slate-400 hover:text-blue-600 transition">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                        </button>
                        <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-md">
                            {{ strtoupper(substr(auth()->user()->name ?? 'AD', 0, 2)) }}
                        </div>
                    </div>
                </div>
            </header>

            <div class="p-8 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="p-2 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold uppercase tracking-wider">New</span>
                            <i class="fas fa-star text-blue-200"></i>
                        </div>
                        <h3 class="text-3xl font-bold">128</h3>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="p-2 bg-purple-50 text-purple-600 rounded-lg text-xs font-bold uppercase tracking-wider">Contacted</span>
                            <i class="fas fa-paper-plane text-purple-200"></i>
                        </div>
                        <h3 class="text-3xl font-bold">45</h3>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="p-2 bg-orange-50 text-orange-600 rounded-lg text-xs font-bold uppercase tracking-wider">Warm</span>
                            <i class="fas fa-fire text-orange-200"></i>
                        </div>
                        <h3 class="text-3xl font-bold">12</h3>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm border-b-4 border-green-500">
                        <div class="flex items-center justify-between mb-3">
                            <span class="p-2 bg-green-50 text-green-600 rounded-lg text-xs font-bold uppercase tracking-wider">Closed</span>
                            <i class="fas fa-check-circle text-green-200"></i>
                        </div>
                        <h3 class="text-3xl font-bold">89</h3>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="p-2 bg-red-50 text-red-600 rounded-lg text-xs font-bold uppercase tracking-wider">Lost</span>
                            <i class="fas fa-times-circle text-red-200"></i>
                        </div>
                        <h3 class="text-3xl font-bold">24</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h2 class="text-lg font-bold">Recent Leads</h2>
                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <div class="relative flex-1">
                                <input type="text" placeholder="Search by name or company..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none transition">
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
                                    <th class="px-6 py-4">Company</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4">Source</th>
                                    <th class="px-6 py-4">Quick Note</th>
                                    <th class="px-6 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody class="divide-y divide-gray-100">
                                @foreach($lead as $item)
                                <tr class="hover:bg-blue-50/30 transition group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center text-slate-500 font-bold text-xs">
                                                {{ strtoupper(substr($item->name, 0, 2)) }}
                                            </div>
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
                                        <div class="text-sm font-medium">{{ $item->companyName }}</div>
                                        <div class="flex gap-2 mt-1">
                                            @if($item->companyWebsite)
                                                <a href="{{ $item->companyWebsite }}" target="_blank" class="text-slate-400 hover:text-blue-600 text-xs transition"><i class="fas fa-globe"></i></a>
                                            @endif
                                            @if($item->companyLinkedin)
                                                <a href="{{ $item->companyLinkedin }}" target="_blank" class="text-slate-400 hover:text-blue-700 text-xs transition"><i class="fab fa-linkedin"></i></a>
                                            @endif
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
                                    <td class="px-6 py-4">
                                        <p class="text-sm text-slate-500 italic max-w-[200px] truncate" title="{{ $item->note }}">
                                            {{ $item->note ?? 'No notes...' }}
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                                            <a href="{{ route('dashboard.detail', $item->slug) }}" title="View Details" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-indigo-600 transition">
                                                <i class="fas fa-eye text-xs"></i>
                                            </a>
                                            
                                            <a href="#" title="Edit Lead" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-blue-600 transition">
                               
                                            <i class="fas fa-edit text-xs"></i>
                                            </a>

                                            <form action="#" method="POST" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete" class="p-2 hover:bg-white rounded-lg border border-transparent hover:border-gray-200 text-slate-400 hover:text-red-600 transition">
                                                    <i class="fas fa-trash text-xs"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
        </main>
    </div>

</body>
</html>