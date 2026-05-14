<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crm™ | The Future of Client Relations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        .glow { box-shadow: 0 0 30px rgba(99, 102, 241, 0.15); }
        .glass-card { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
        .hero-gradient { background: radial-gradient(circle at 50% 50%, rgba(79, 70, 229, 0.15) 0%, transparent 50%); }
        .status-badge { @apply px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider; }
    </style>
</head>
<body class="bg-[#020617] text-slate-200 antialiased leading-relaxed">

    <nav class="sticky top-0 z-50 glass-card border-x-0 border-t-0">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="text-2xl font-extrabold tracking-tighter text-white">crm<span class="text-indigo-500">.</span></div>
            <div class="hidden md:flex space-x-10 text-sm font-medium">
                <a href="#features" class="hover:text-indigo-400 transition-colors">Features</a>
                <a href="#leads" class="hover:text-indigo-400 transition-colors">Platform</a>
                <a href="#pricing" class="hover:text-indigo-400 transition-colors">Pricing</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-sm font-semibold hover:text-white">Sign In</a>
                <button class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-lg text-sm font-bold transition-all shadow-lg shadow-indigo-500/20">
                    Get Started Free
                </button>
            </div>
        </div>
    </nav>

    <section class="relative hero-gradient pt-24 pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block px-4 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 text-xs font-bold uppercase tracking-widest mb-8">
                Over 2,500+ teams switched last month
            </span>
            <h1 class="text-6xl md:text-8xl font-extrabold text-white tracking-tighter mb-8">
                Sell smarter, not <br/><span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">harder.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto mb-12">
                The AI-first CRM designed for teams that value speed. Automate your pipeline, predict churn, and grow your revenue on autopilot.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-5">
                <button class="w-full sm:w-auto bg-white text-slate-950 px-10 py-4 rounded-xl font-bold text-lg hover:scale-105 transition-transform">
                    Start 14-Day Trial
                </button>
                <button class="w-full sm:w-auto glass-card px-10 py-4 rounded-xl font-bold text-lg hover:bg-white/5 transition-colors">
                    Watch Demo
                </button>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass-card p-8 rounded-3xl group hover:border-indigo-500/50 transition-all">
                <div class="w-12 h-12 bg-indigo-600/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Lightning Automation</h3>
                <p class="text-slate-400">Trigger emails and tasks based on lead status changes. Never let a prospect go cold.</p>
            </div>
            <div class="glass-card p-8 rounded-3xl group hover:border-purple-500/50 transition-all">
                <div class="w-12 h-12 bg-purple-600/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Predictive Analytics</h3>
                <p class="text-slate-400">Our AI forecasts revenue with 98% accuracy based on historical pipeline velocity.</p>
            </div>
            <div class="glass-card p-8 rounded-3xl group hover:border-emerald-500/50 transition-all">
                <div class="w-12 h-12 bg-emerald-600/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Unified Contact Hub</h3>
                <p class="text-slate-400">Manage LinkedIn profiles, company websites, and emails in one central database.</p>
            </div>
        </div>
    </section>

<div class="relative max-w-lg mx-auto">
    <div class="absolute -top-10 -right-10 w-64 h-64 bg-indigo-600/20 blur-[100px] rounded-full"></div>
    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-purple-600/10 blur-[100px] rounded-full"></div>

    <div class="relative z-10 glass-card rounded-[2.5rem] p-1.5 border-white/10 shadow-[0_32px_64px_-15px_rgba(0,0,0,0.5)] transform hover:-translate-y-2 transition-transform duration-500">
        <div class="bg-[#0f172a] rounded-[2.3rem] overflow-hidden">
            
            <div class="p-8 border-b border-white/5 flex justify-between items-center bg-gradient-to-b from-white/[0.03] to-transparent">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-indigo-500/20">
                        AR
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg tracking-tight">Alex Rivera</h4>
                        <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">slug: alex-rivera-techflow</p>
                    </div>
                </div>
                <div class="flex flex-col items-end">
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[10px] font-bold uppercase tracking-wider border border-emerald-500/20 mb-1">
                        status: Warm
                    </span>
                    <span class="text-[9px] text-slate-600 font-medium italic">Updated 2m ago</span>
                </div>
            </div>
            
            <div class="p-8 grid grid-cols-2 gap-8">
                <div class="space-y-1">
                    <label class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-extrabold">Lead Source</label>
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-indigo-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <p class="text-slate-200 font-semibold text-sm">LinkedIn</p>
                    </div>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-extrabold">Company</label>
                    <p class="text-slate-200 font-semibold text-sm">TechFlow Inc.</p>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-extrabold">Direct Email</label>
                    <p class="text-indigo-400 font-medium text-sm border-b border-indigo-500/10 hover:border-indigo-400 transition-colors cursor-pointer">alex@techflow.io</p>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-extrabold">Phone</label>
                    <p class="text-slate-200 font-medium text-sm">+1 (555) 092-4412</p>
                </div>
                <div class="col-span-2 p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <label class="text-[9px] uppercase tracking-widest text-slate-500 font-bold block mb-2">Latest Note</label>
                    <p class="text-slate-300 text-xs leading-relaxed italic">"Expressed strong interest in the Q3 enterprise migration. Follow up with the pricing sheet on Tuesday morning."</p>
                </div>
            </div>

            <div class="px-8 py-6 bg-slate-900/50 border-t border-white/5 flex items-center justify-between">
                <div class="flex -space-x-2">
                    <div title="John Doe" class="w-8 h-8 rounded-full border-2 border-[#0f172a] bg-indigo-500 flex items-center justify-center text-[10px] font-bold text-white cursor-help">JD</div>
                    <div title="Sarah Kim" class="w-8 h-8 rounded-full border-2 border-[#0f172a] bg-emerald-500 flex items-center justify-center text-[10px] font-bold text-white cursor-help">SK</div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 text-xs font-bold transition-colors">Archive</button>
                    <button class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-bold transition-all shadow-lg shadow-indigo-500/20 active:scale-95">Edit Record</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <section id="pricing" class="py-24 bg-slate-950">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-16">Simple, scalable pricing</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="glass-card p-10 rounded-3xl text-left border-indigo-500/30 glow relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-indigo-500 text-white text-[10px] font-bold px-4 py-1 rounded-bl-lg">POPULAR</div>
                    <h3 class="text-indigo-400 font-bold mb-2 uppercase tracking-widest text-xs">Pro Plan</h3>
                    <div class="text-5xl font-extrabold text-white mb-6">$49<span class="text-lg text-slate-500 font-normal">/mo</span></div>
                    <ul class="space-y-4 mb-10 text-slate-300">
                        <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Up to 10 team members</li>
                        <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Advanced AI forecasting</li>
                        <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> 50 Custom automations</li>
                    </ul>
                    <button class="w-full py-4 rounded-xl bg-indigo-600 font-bold hover:bg-indigo-500 transition-colors shadow-lg shadow-indigo-500/20">Choose Pro</button>
                </div>
                <div class="glass-card p-10 rounded-3xl text-left hover:border-white/20 transition-all">
                    <h3 class="text-slate-400 font-bold mb-2 uppercase tracking-widest text-xs">Enterprise</h3>
                    <div class="text-5xl font-extrabold text-white mb-6">Custom</div>
                    <ul class="space-y-4 mb-10 text-slate-300">
                        <li class="flex items-center"><span class="text-slate-500 mr-2">✓</span> Unlimited everything</li>
                        <li class="flex items-center"><span class="text-slate-500 mr-2">✓</span> Custom API & Webhooks</li>
                        <li class="flex items-center"><span class="text-slate-500 mr-2">✓</span> Dedicated Success Manager</li>
                    </ul>
                    <button class="w-full py-4 rounded-xl glass-card font-bold hover:bg-white/10 transition-colors border-white/20">Contact Sales</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-20 border-t border-white/5 bg-[#020617]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-start">
            <div class="mb-12 md:mb-0">
                <div class="text-2xl font-bold text-white mb-6">crm<span class="text-indigo-500">.</span></div>
                <p class="text-slate-500 max-w-xs text-sm">Building the software that builds your business. The future of client relations is automated.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-16">
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Product</h4>
                    <ul class="text-slate-500 space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-indigo-400 transition">Features</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Security</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">API Docs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Company</h4>
                    <ul class="text-slate-500 space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-indigo-400 transition">About</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Careers</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm">Legal</h4>
                    <ul class="text-slate-500 space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-indigo-400 transition">Privacy</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-16 mt-16 border-t border-white/5 text-slate-600 text-xs text-center md:text-left">
            © 2026 crm Inc. All rights reserved. Built with speed and precision.
        </div>
    </footer>

</body>
</html>