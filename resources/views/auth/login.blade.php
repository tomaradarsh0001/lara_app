<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Style Login</title>
    <!-- Tailwind via CDN + Apple SF Pro font -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=16037,16038,16039,16040,16041,16042,16043,16044,16045,16046,16047,16048,16049,16050,16051,16052,16053,16054,16055">
    <style>
        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(145deg, #f5f7fa 0%, #e9eef2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 1.5rem;
        }
        .apple-card {
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.5);
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1), 0 0 0 1px rgba(0,0,0,0.02) inset;
        }
        .input-apple {
            transition: all 0.18s ease;
            background-color: rgba(255,255,255,0.7);
            border: 1px solid rgba(0,0,0,0.1);
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .input-apple:focus {
            border-color: #0071e3;
            box-shadow: 0 0 0 4px rgba(0,113,227,0.15);
            outline: none;
            background-color: white;
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
            transform: scale(1.01);
        }
        .btn-apple:active {
            background: #0068c9;
            transform: scale(0.98);
        }
        .link-apple {
            color: #0071e3;
            font-weight: 400;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: border-color 0.2s;
        }
        .link-apple:hover {
            border-bottom: 1px solid #0071e3;
        }
        .already-link {
            color: #1d1d1f;
            opacity: 0.7;
            transition: opacity 0.2s, color 0.2s;
            font-size: 0.9rem;
        }
        .already-link:hover {
            opacity: 1;
            color: #0071e3;
            text-decoration: none;
        }
        /* custom checkbox style to match apple aesthetic */
        .apple-checkbox {
            appearance: none;
            width: 1.2rem;
            height: 1.2rem;
            border: 1px solid rgba(0,0,0,0.2);
            border-radius: 0.3rem;
            background-color: rgba(255,255,255,0.8);
            transition: all 0.15s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .apple-checkbox:checked {
            background-color: #0071e3;
            border-color: #0071e3;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3E%3Cpath d='M12.207 4.793a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L6.5 9.086l4.293-4.293a1 1 0 0 1 1.414 0z'/%3E%3C/svg%3E");
            background-size: 0.9rem;
            background-position: center;
            background-repeat: no-repeat;
        }
        .apple-checkbox:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0,113,227,0.15);
            border-color: #0071e3;
        }
    </style>
</head>
<body>
    <div class="w-full max-w-md">
        <!-- Apple-style card container (identical to register) -->
        <div class="apple-card rounded-3xl p-8 md:p-10 w-full">
            <!-- subtle apple logo -->
            <div class="flex justify-center mb-6">
                <svg class="w-12 h-12 text-black/80" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                </svg>
            </div>
            <h2 class="text-3xl font-semibold tracking-tight text-[#1d1d1f] text-center mb-2">Welcome back</h2>
            <p class="text-center text-sm text-[#6e6e73] mb-8">Sign in to your account.</p>

            <!-- Session Status (already styled via original class, we keep it but enhance look) -->
            <div class="mb-4">
                <x-auth-session-status class="text-sm text-green-600 bg-green-50/80 p-3 rounded-xl border border-green-200" :status="session('status')" />
            </div>

            <!-- Login form with apple styling -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-5">
                    <x-input-label for="email" :value="__('Email')" class="text-xs font-medium uppercase tracking-wider text-[#6e6e73] mb-1" />
                    <x-text-input id="email" class="block w-full px-5 py-3 rounded-xl input-apple text-[#1d1d1f] placeholder-[#a1a1a8]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <x-input-label for="password" :value="__('Password')" class="text-xs font-medium uppercase tracking-wider text-[#6e6e73] mb-1" />
                    <x-text-input id="password" class="block w-full px-5 py-3 rounded-xl input-apple text-[#1d1d1f] placeholder-[#a1a1a8]"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Remember Me (apple styled checkbox) -->
                <div class="block mt-4 mb-6">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                        <input id="remember_me" type="checkbox" class="apple-checkbox" name="remember">
                        <span class="ml-2 text-sm text-[#1d1d1f]/70 group-hover:text-[#1d1d1f] transition">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Action row: forgot password + login button -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="already-link text-sm font-medium" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }} <span class="ml-1 text-[#0071e3]">→</span>
                        </a>
                    @endif

                    <x-primary-button class="btn-apple px-8 py-3 rounded-full text-white font-medium shadow-md shadow-blue-200">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Sign up link (nice addition for apple flow) -->
            <div class="mt-8 text-center text-xs text-[#8e8e93] border-t border-black/5 pt-5">
                {{ __("Don't have an account?") }} <a href="{{ route('register') }}" class="underline underline-offset-2 hover:text-[#0071e3] font-medium">Sign up</a>
            </div>
        </div>
        <p class="text-center text-xs text-[#8e8e93] mt-6">© 2025 Apple Inc. — login styled with care.</p>
    </div>

    <!-- All original laravel components keep functionality. x-auth-session-status, x-input-label, etc. are unchanged in behaviour. -->
</body>
</html>