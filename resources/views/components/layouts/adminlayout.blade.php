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
<x-common.adminsidebar/>
        </aside>

        <main class="flex-1 overflow-y-auto">
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex justify-between items-center sticky top-0 z-20">
<x-common.adminheader/>
            </header>

            <div class="p-8 space-y-8">
                {{ $slot }}
               </div>
    </div>

</body>
</html>
