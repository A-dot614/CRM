<div class="flex flex-col h-full bg-slate-900 text-white">
    <!-- LOGO SECTION -->
    <div class="p-6 text-2xl font-bold border-b border-slate-800 flex items-center gap-3">
        <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-sm shadow-lg shadow-blue-900/20">
            LF
        </div>
        <span class="tracking-tight">Lead<span class="text-blue-400">Flow</span></span>
    </div>
    
    <!-- NAVIGATION -->
    <nav class="flex-1 p-4 space-y-2">
        <p class="text-[10px] font-bold text-slate-500 uppercase px-4 py-2 tracking-widest">Main Menu</p>
        
        <!-- Dashboard/Leads Link -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 {{ request()->routeIs('dashboard*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
            <i class="fas fa-th-large w-5 text-center"></i> 
            <span class="font-semibold text-sm">Leads</span>
        </a>

        <!-- Outreach Channels Link -->
        <a href="{{ route('outreachchannel.index') }}" 
           class="flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 {{ request()->routeIs('outreachchannel*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
            <i class="fas fa-satellite-dish w-5 text-center"></i> 
            <span class="font-semibold text-sm">Outreach Channels</span>
        </a>

        <!-- Outreach Link (Placeholder) -->
        <a href="{{route('outreach.index')}}" 
          class="flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 {{ request()->routeIs('outreach*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
            <i class="fas fa-paper-plane w-5 text-center"></i> 
            <span class="font-semibold text-sm">Outreach</span>
        </a>
    </nav>

    <!-- FOOTER / LOGOUT -->
    <div class="p-4 border-t border-slate-800">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center space-x-3 p-3 text-slate-400 hover:text-red-400 hover:bg-red-400/10 rounded-xl transition-all group">
                <i class="fas fa-sign-out-alt w-5 text-center group-hover:translate-x-1 transition-transform"></i>
                <span class="font-bold text-sm">Logout</span>
            </button>
        </form>
    </div>
</div>