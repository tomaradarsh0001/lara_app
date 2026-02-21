<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Style Dashboard</title>
    <!-- Tailwind + Apple SF Pro font -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=16037,16038,16039,16040,16041,16042,16043,16044,16045,16046,16047,16048,16049,16050,16051,16052,16053,16054,16055">
    <style>
        * {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        body {
            background: #f5f7fa;
        }
        /* subtle apple card style */
        .apple-card {
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.5);
            box-shadow: 0 8px 24px -6px rgba(0,0,0,0.1), 0 0 0 1px rgba(0,0,0,0.02) inset;
            transition: all 0.2s ease;
        }
        .apple-card:hover {
            box-shadow: 0 16px 32px -8px rgba(0,0,0,0.12), 0 0 0 1px rgba(0,0,0,0.02) inset;
        }
        /* glass sidebar */
        .apple-sidebar {
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255,255,255,0.7);
            box-shadow: 4px 0 20px -8px rgba(0,0,0,0.05);
        }
        .nav-link {
            transition: all 0.2s;
            color: #1d1d1f;
            border-radius: 100px;
            padding: 0.5rem 1rem;
            font-weight: 450;
        }
        .nav-link:hover {
            background: rgba(0,113,227,0.08);
            color: #0071e3;
        }
        .nav-link-active {
            background: rgba(0,113,227,0.1);
            color: #0071e3;
            font-weight: 500;
        }
        .btn-apple {
            background: #0071e3;
            transition: all 0.15s ease;
            border: none;
            font-weight: 500;
            letter-spacing: -0.01em;
        }
        .btn-apple:hover {
            background: #0077ed;
            transform: scale(1.02);
        }
        .btn-apple-outline {
            background: transparent;
            border: 1px solid rgba(0,113,227,0.3);
            color: #0071e3;
            transition: all 0.15s;
        }
        .btn-apple-outline:hover {
            background: rgba(0,113,227,0.05);
            border-color: #0071e3;
        }
        /* stat card number */
        .stat-number {
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: #1d1d1f;
        }
        /* custom scrollbar (optional) */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.02);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Replace traditional x-app-layout with apple-fied layout -->
    <div class="min-h-screen flex flex-col md:flex-row">
        
        <!-- === APPLE STYLE SIDEBAR (instead of default header) === -->
        <aside class="apple-sidebar w-full md:w-64 lg:w-72 px-4 py-6 flex-shrink-0">
            <!-- logo / app name -->
            <div class="flex items-center space-x-2 px-3 mb-8">
                <svg class="w-8 h-8 text-[#0071e3]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                </svg>
                <span class="text-xl font-semibold tracking-tight text-[#1d1d1f]">AcmeStack</span>
            </div>
            
            <!-- navigation links (replaces header) -->
            <nav class="space-y-1">
                <a href="#" class="nav-link flex items-center space-x-3 nav-link-active">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="nav-link flex items-center space-x-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>Profile</span>
                </a>
                <a href="#" class="nav-link flex items-center space-x-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <span>Documents</span>
                </a>
                <a href="#" class="nav-link flex items-center space-x-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Settings</span>
                </a>
            </nav>
            
            <!-- user menu at bottom of sidebar (optional) -->
            <div class="mt-auto pt-8">
                <div class="border-t border-black/5 pt-4 px-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 rounded-full bg-[#0071e3]/10 flex items-center justify-center text-[#0071e3] font-medium">JD</div>
                            <div class="text-sm">
                                <div class="font-medium text-[#1d1d1f]">John Doe</div>
                                <div class="text-[#8e8e93] text-xs">john@example.com</div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-[#8e8e93] hover:text-[#0071e3] transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- === MAIN CONTENT AREA (replaces the old py-12 container) === -->
        <main class="flex-1 overflow-y-auto p-4 md:p-8">
            <!-- header slot replacement (modern welcome header) -->
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold tracking-tight text-[#1d1d1f]">Dashboard</h1>
                    <p class="text-[#6e6e73] mt-1">Welcome back, here's what's happening.</p>
                </div>
                <div class="flex space-x-2">
                    <button class="btn-apple-outline px-4 py-2 rounded-full text-sm font-medium">Share</button>
                    <button class="btn-apple px-4 py-2 rounded-full text-sm font-medium text-white shadow-md shadow-blue-200">+ New</button>
                </div>
            </div>

            <!-- original content: max-w-7xl mx-auto sm:px-6 lg:px-8 but with apple cards -->
            <div class="max-w-7xl mx-auto">
                <!-- stats grid (enhance with apple cards) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
                    <div class="apple-card rounded-2xl p-5">
                        <div class="flex items-center justify-between">
                            <span class="text-[#6e6e73] text-sm font-medium">Revenue</span>
                            <span class="text-green-600 bg-green-50 px-2 py-1 rounded-full text-xs">+12%</span>
                        </div>
                        <div class="stat-number mt-2">$45,2K</div>
                        <div class="text-[#8e8e93] text-xs mt-1">vs last month</div>
                    </div>
                    <div class="apple-card rounded-2xl p-5">
                        <div class="flex items-center justify-between">
                            <span class="text-[#6e6e73] text-sm font-medium">Users</span>
                            <span class="text-blue-600 bg-blue-50 px-2 py-1 rounded-full text-xs">+5%</span>
                        </div>
                        <div class="stat-number mt-2">2,345</div>
                        <div class="text-[#8e8e93] text-xs mt-1">active today</div>
                    </div>
                    <div class="apple-card rounded-2xl p-5">
                        <div class="flex items-center justify-between">
                            <span class="text-[#6e6e73] text-sm font-medium">Sales</span>
                            <span class="text-amber-600 bg-amber-50 px-2 py-1 rounded-full text-xs">+23%</span>
                        </div>
                        <div class="stat-number mt-2">1,234</div>
                        <div class="text-[#8e8e93] text-xs mt-1">new orders</div>
                    </div>
                    <div class="apple-card rounded-2xl p-5">
                        <div class="flex items-center justify-between">
                            <span class="text-[#6e6e73] text-sm font-medium">Conversion</span>
                            <span class="text-purple-600 bg-purple-50 px-2 py-1 rounded-full text-xs">+2%</span>
                        </div>
                        <div class="stat-number mt-2">3.6%</div>
                        <div class="text-[#8e8e93] text-xs mt-1">+0.4 pp</div>
                    </div>
                </div>

                <!-- original dashboard message (preserved but enhanced as a card) -->
                <div class="apple-card rounded-2xl overflow-hidden mb-8">
                    <div class="p-6 text-[#1d1d1f]">
                        <!-- this is the exact line from original: {{ __("You're logged in!") }} but with styling -->
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium">{{ __("You're logged in!") }}</h3>
                                <p class="text-[#6e6e73] text-sm">Your session is active and you have full access.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- extra content: recent activity (apple style) -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="apple-card rounded-2xl p-6">
                        <h3 class="font-medium text-[#1d1d1f] mb-4 flex items-center">Recent activity</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center text-sm py-2 border-b border-black/5 last:border-0">
                                <span class="w-2 h-2 rounded-full bg-green-500 mr-3"></span>
                                <span class="flex-1 text-[#1d1d1f]">New user registered</span>
                                <span class="text-[#8e8e93] text-xs">2 min ago</span>
                            </li>
                            <li class="flex items-center text-sm py-2 border-b border-black/5 last:border-0">
                                <span class="w-2 h-2 rounded-full bg-blue-500 mr-3"></span>
                                <span class="flex-1 text-[#1d1d1f]">Order #1234 completed</span>
                                <span class="text-[#8e8e93] text-xs">1 hour ago</span>
                            </li>
                            <li class="flex items-center text-sm py-2 border-b border-black/5 last:border-0">
                                <span class="w-2 h-2 rounded-full bg-amber-500 mr-3"></span>
                                <span class="flex-1 text-[#1d1d1f]">Payment received</span>
                                <span class="text-[#8e8e93] text-xs">3 hours ago</span>
                            </li>
                        </ul>
                    </div>
                    <div class="apple-card rounded-2xl p-6">
                        <h3 class="font-medium text-[#1d1d1f] mb-4">Quick actions</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="btn-apple-outline py-3 rounded-xl text-sm flex flex-col items-center">
                                <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
                                New project
                            </button>
                            <button class="btn-apple-outline py-3 rounded-xl text-sm flex flex-col items-center">
                                <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                                Invite
                            </button>
                            <button class="btn-apple-outline py-3 rounded-xl text-sm flex flex-col items-center">
                                <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                Reports
                            </button>
                            <button class="btn-apple-outline py-3 rounded-xl text-sm flex flex-col items-center">
                                <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- preserve original logout route functionality -->
    <form method="POST" action="{{ route('logout') }}" id="logout-form" class="hidden">@csrf</form>
    <script>
        // optional: if any legacy logout links, but we already have logout button in sidebar
    </script>
</body>
</html>