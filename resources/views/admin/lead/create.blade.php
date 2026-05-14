<x-layouts.adminlayout>
    <div class="p-8 max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{route("dashboard")}}" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 transition-colors group">
                <i class="fas fa-chevron-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                <span class="font-semibold">Back to Leads</span>
            </a>
        </div>

        <form action="{{route("dashboard")}}" enctype="multipart/form-data" method="POST" class="space-y-6">
                @csrf
            <input type="hidden" name="_token" value="your-csrf-token-here">

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <h2 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-6 flex items-center gap-2">
                    <i class="fas fa-user-circle"></i> Personal Information

                </h2>
<!-- Image Upload Input -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold mb-2">Profile Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-slate-200 border-dashed rounded-xl cursor-pointer bg-slate-50 hover:bg-slate-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="fas fa-cloud-upload-alt text-slate-400 mb-2"></i>
                                    <p class="text-xs text-slate-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-[10px] text-slate-400">PNG, JPG or WebP (max. 2MB)</p>
                                </div>
                                <input type="file" name="image" class="hidden" accept="image/*" />
                            </label>
                        </div>
                        @error('image') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>                

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold mb-2">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" required placeholder="Enter lead name" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('name') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror    
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Phone Number</label>
                        <input type="tel" name="phone" placeholder="+1 (555) 000-0000" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('phone') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Email Address</label>
                        <input type="email" name="email" placeholder="example@domain.com" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('email') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold mb-2">Personal LinkedIn URL</label>
                        <div class="relative">
                            <span class="absolute left-4 top-2.5 text-slate-400"><i class="fab fa-linkedin"></i></span>
                            <input type="url" name="userLinkedin" placeholder="https://linkedin.com/in/username" 
                                class="w-full pl-10 pr-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                                 @error('userLinkedin') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold mb-2">Address</label>
                        <textarea name="address" rows="2" placeholder="Street address, City, State" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
                             @error('address') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <h2 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-6 flex items-center gap-2">
                    <i class="fas fa-building"></i> Company Details
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2">Company Name</label>
                        <input type="text" name="companyName" placeholder="Acme Corp" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('companyName') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Company Website</label>
                        <input type="url" name="companyWebsite" placeholder="https://www.acme.com" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('companyWebsite') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Company Email</label>
                        <input type="email" name="companyEmail" placeholder="contact@acme.com" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('companyEmail') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Company LinkedIn</label>
                        <input type="url" name="companyLinkedin" placeholder="LinkedIn company page URL" 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                             @error('companyLinkedin') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <h2 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-6 flex items-center gap-2">
                    <i class="fas fa-filter"></i> Status & Source
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2">Lead Status</label>
                        <select name="status" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none appearance-none bg-no-repeat bg-right transition" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E'); background-position: right 1rem center; background-size: 1.2em;">
                            <option value="new">New</option>
                            <option value="contacted">Contacted</option>
                            <option value="warm">Warm</option>
                            <option value="closed">Closed</option>
                            <option value="lost">Lost</option>
                        </select>
                         @error('status') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Lead Source</label>
                        <select name="source" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none appearance-none bg-no-repeat bg-right transition" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E'); background-position: right 1rem center; background-size: 1.2em;">
                            <option value="">Select Source</option>
                            <option value="LinkedIn">LinkedIn</option>
                            <option value="Google">Google</option>
                            <option value="Referral">Referral</option>
                            <option value="Other">Other</option>
                        </select>
                         @error('source') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold mb-2">Additional Notes</label>
                        <textarea name="note" rows="4" placeholder="Mention any specific requirements or call logs..." 
                            class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
                             @error('note') <p class="text-red-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pb-12">
                <button type="reset" class="px-6 py-2 text-slate-500 font-semibold hover:text-slate-700 transition">Discard</button>
                <button type="submit" class="px-8 py-2 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 shadow-lg shadow-blue-200 transition">
                    Save Lead
                </button>
            </div>
        </form>
    </div>    
</x-layouts.adminlayout>