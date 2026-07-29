<x-layouts.adminlayout>
    <div class="p-8 space-y-6">
        <div class="flex items-center gap-4">
            <a href="{{ route('outreach.index') }}"
                class="p-2.5 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
                <i class="fas fa-arrow-left text-sm"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Edit Outreach Log</h1>
                <p class="text-sm text-slate-500">Updating record for Lead #{{ $outreach->lead_id }}</p>
            </div>
        </div>

        <div class="max-w-6xl">
            <form action="{{ route('outreach.update', $outreach->id) }}" method="POST"
                class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                @csrf
                @method('PUT')

                <div class="px-8 py-6 border-b border-gray-100 bg-gray-50/30 flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-indigo-100">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">Update Interaction</h3>
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wider">Modify the details of
                                this outreach event</p>
                        </div>
                    </div>
                </div>

                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <div class="space-y-2">
                            <label class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Associated
                                Lead</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="fas fa-user text-xs"></i>
                                </span>
                                <input type="text" value="#{{ $outreach->lead_id }}"
                                    class="w-full pl-10 pr-4 py-3 bg-gray-100 border border-gray-200 rounded-xl text-slate-500 font-semibold cursor-not-allowed"
                                    readonly>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="outreach_channel_id"
                                class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Channel</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="fas fa-satellite-dish text-xs"></i>
                                </span>
                                <select name="outreach_channel_id" id="outreach_channel_id"
                                    class="w-full pl-10 pr-10 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none text-slate-700 font-medium appearance-none">
                                    @foreach ($channels as $channel)
                                        <option value="{{ $channel->id }}"
                                            {{ old('outreach_channel_id', $outreach->outreach_channel_id) == $channel->id ? 'selected' : '' }}>
                                            {{ $channel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="score"
                                class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Engagement Score
                                (0-100)</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="fas fa-chart-line text-xs"></i>
                                </span>
                                <input type="number" name="score" id="score" min="0" max="100"
                                    value="{{ old('score', $outreach->score) }}"
                                    class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none text-slate-700 font-bold">
                            </div>
                        </div>

                        <div class="space-y-2 lg:col-span-1">
                            <label for="date"
                                class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Interaction
                                Date</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text text-slate-400">
                                    <i class="far fa-calendar text-xs"></i>
                                </span>
                                <input type="date" name="date" id="date"
                                    value="{{ old('date', $outreach->date ? date('Y-m-d', strtotime($outreach->date)) : '') }}"
                                    class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none text-slate-700 font-medium">
                            </div>
                        </div>

                        <div class="col-span-1 md:col-span-2 lg:col-span-3 space-y-2">
                            <label for="note"
                                class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Communication
                                Notes</label>
                            <textarea name="note" id="note" rows="5"
                                class="w-full p-6 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all outline-none text-slate-600 italic leading-relaxed"
                                placeholder="Enter detailed notes about the interaction...">{{ old('note', $outreach->note) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="px-8 py-4 bg-gray-50/50 border-t border-gray-100 flex justify-end gap-3">
                    <a href="{{ route('outreach.show', $outreach->id) }}"
                        class="px-6 py-2.5 text-sm font-bold text-slate-500 hover:text-slate-700 transition">
                        Discard Changes
                    </a>
                    <button type="submit"
                        class="px-8 py-2.5 bg-slate-900 text-white text-sm font-bold rounded-xl hover:bg-slate-800 transition shadow-md shadow-slate-200 flex items-center gap-2">
                        <i class="fas fa-check-circle text-xs text-indigo-400"></i>
                        Update Record
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.adminlayout>
