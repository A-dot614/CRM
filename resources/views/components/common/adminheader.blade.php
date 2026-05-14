<!-- HEADER -->
<header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-10 py-5 px-8"> <!-- Increased py-4 to py-5 -->
    <div class="flex items-center justify-between">
        <!-- PAGE TITLE -->
        <div>
            <h1 class="text-xl font-bold text-slate-900 tracking-tight">Sales Dashboard</h1>
            <p class="text-xs text-slate-500 font-medium">Welcome back, {{ auth()->user()->name ?? 'Admin' }}</p>
        </div>
        
        <!-- RIGHT ACTIONS -->
        <div class="flex items-center gap-6">
            <div class="hidden md:flex relative">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" placeholder="Global search..." class="bg-slate-100 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500 rounded-xl py-2 pl-9 pr-4 text-xs w-64 transition-all outline-none">
            </div>

            <div class="flex items-center gap-3 border-l border-slate-200 pl-6">
                <button class="relative p-2.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all group">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white group-hover:scale-110 transition-transform"></span>
                </button>

                <div class="flex items-center gap-3 ml-2 group cursor-pointer">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-900 leading-none">{{ auth()->user()->name ?? 'Admin User' }}</p>
                        <p class="text-[10px] text-slate-500 font-bold uppercase tracking-tighter mt-1">Super Admin</p>
                    </div>
                    <div class="h-10 w-10 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold shadow-lg shadow-blue-200 group-hover:rotate-3 transition-transform">
                        {{ strtoupper(substr(auth()->user()->name ?? 'AD', 0, 2)) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT WRAPPER -->
<!-- Use 'mt-6' or 'mt-8' here to create the space between header and content -->
<main class="p-8 mt-4"> 
    <!-- Your stats, tables, and forms go here -->
</main>