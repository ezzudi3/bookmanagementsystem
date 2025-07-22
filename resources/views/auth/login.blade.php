<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - {{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .logo-gradient {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .illustration-bg {
            background: radial-gradient(ellipse at top, rgba(34, 197, 94, 0.1) 0%, transparent 70%);
        }
        
        .tablet-device {
            perspective: 1000px;
            transform-style: preserve-3d;
        }
        
        .tablet-screen {
            background: linear-gradient(145deg, #1e293b 0%, #334155 100%);
            border-radius: 20px;
            padding: 8px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            transform: rotateY(-15deg) rotateX(5deg);
        }
        
        .screen-content {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            border-radius: 12px;
            padding: 20px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .screen-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px 12px 0 0;
        }
        
        .character {
            animation: gentle-sway 4s ease-in-out infinite;
        }
        
        @keyframes gentle-sway {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-3px) translateX(2px); }
            75% { transform: translateY(3px) translateX(-2px); }
        }
        
        .floating-elements {
            animation: float-around 8s ease-in-out infinite;
        }
        
        @keyframes float-around {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            33% { transform: translateY(-10px) rotate(5deg); }
            66% { transform: translateY(10px) rotate(-5deg); }
        }
        
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            background: #ffffff;
        }
        
        .input-field:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
            outline: none;
        }
        
        .btn-back {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(107, 114, 128, 0.3);
        }
        
        .btn-signin {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            transition: all 0.3s ease;
        }
        
        .btn-signin:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(34, 197, 94, 0.3);
        }
    </style>
</head>
<body class="min-h-screen">

    <div class="min-h-screen flex">
        
        <!-- Left Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 items-center justify-center p-12 illustration-bg relative">
            
            <!-- Logo -->
            <div class="absolute top-8 left-8 flex items-center">
                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-lg font-bold logo-gradient">BOOK</h1>
                    <p class="text-xs text-gray-600 font-medium">MANAGEMENT SYSTEM</p>
                </div>
            </div>

            <!-- Main Illustration -->
            <div class="flex items-center justify-center space-x-12 w-full max-w-2xl">
                
                <!-- Floating Security Elements -->
                <div class="floating-elements">
                    <div class="relative">
                        <!-- Security Shield -->
                        <div class="w-16 h-20 bg-gradient-to-b from-green-400 to-green-600 rounded-lg shadow-lg flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <!-- File Icons -->
                        <div class="absolute -top-4 -right-6 w-8 h-10 bg-white rounded shadow-md transform rotate-12"></div>
                        <div class="absolute -top-2 -right-8 w-8 h-10 bg-green-200 rounded shadow-md transform rotate-6"></div>
                        <div class="absolute top-0 -right-10 w-8 h-10 bg-green-100 rounded shadow-md"></div>
                    </div>
                </div>

                <!-- Tablet Device -->
                <div class="tablet-device">
                    <div class="tablet-screen">
                        <div class="screen-content w-80 h-60">
                            <!-- Screen Header -->
                            <div class="flex items-center justify-center mb-6 relative z-10">
                                <h3 class="text-xl font-bold">SIGN IN</h3>
                            </div>
                            
                            <!-- Mock Form -->
                            <div class="space-y-4 relative z-10">
                                <!-- Username Field -->
                                <div class="flex items-center bg-white bg-opacity-20 rounded-lg px-4 py-3">
                                    <div class="w-6 h-6 bg-white bg-opacity-30 rounded-full mr-3 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-2 bg-white bg-opacity-40 rounded"></div>
                                </div>
                                
                                <!-- Password Field -->
                                <div class="flex items-center bg-white bg-opacity-20 rounded-lg px-4 py-3">
                                    <div class="w-6 h-6 bg-white bg-opacity-30 rounded-full mr-3 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-2 bg-white bg-opacity-40 rounded"></div>
                                </div>
                                
                                <!-- Mock Button -->
                                <div class="flex justify-end pt-2">
                                    <div class="w-20 h-8 bg-white bg-opacity-40 rounded-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Character -->
                <div class="character">
                    <div class="relative">
                        <!-- Person -->
                        <div class="w-20 h-28">
                            <!-- Head -->
                            <div class="w-12 h-12 bg-gradient-to-b from-orange-300 to-orange-400 rounded-full mx-auto mb-2 relative">
                                <!-- Hair -->
                                <div class="absolute -top-1 left-1 right-1 h-6 bg-gray-800 rounded-full"></div>
                                <!-- Eyes -->
                                <div class="absolute top-4 left-3 w-1 h-1 bg-gray-800 rounded-full"></div>
                                <div class="absolute top-4 right-3 w-1 h-1 bg-gray-800 rounded-full"></div>
                            </div>
                            
                            <!-- Body -->
                            <div class="w-16 h-12 bg-white rounded-t-lg mx-auto relative">
                                <!-- Arms -->
                                <div class="absolute -left-2 top-2 w-4 h-6 bg-orange-300 rounded-full transform -rotate-12"></div>
                                <div class="absolute -right-2 top-2 w-4 h-6 bg-orange-300 rounded-full transform rotate-12"></div>
                            </div>
                            
                            <!-- Legs -->
                            <div class="flex justify-center space-x-2">
                                <div class="w-3 h-8 bg-green-600 rounded-full"></div>
                                <div class="w-3 h-8 bg-green-600 rounded-full"></div>
                            </div>
                            
                            <!-- Shoes -->
                            <div class="flex justify-center space-x-1 mt-1">
                                <div class="w-4 h-2 bg-gray-800 rounded-full"></div>
                                <div class="w-4 h-2 bg-gray-800 rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Plant decoration -->
                        <div class="absolute -bottom-6 -left-8 w-12 h-16">
                            <div class="w-8 h-10 bg-gradient-to-t from-green-500 to-green-400 rounded-t-full mx-auto"></div>
                            <div class="w-10 h-6 bg-gray-600 rounded-b-lg mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-16">
            <div class="w-full max-w-md">
                
                <!-- Mobile Logo -->
                <div class="lg:hidden flex items-center justify-center mb-8">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold logo-gradient">LIBRARY</h1>
                        <p class="text-xs text-gray-600 font-medium">MANAGEMENT SYSTEM</p>
                    </div>
                </div>

                <!-- Welcome Text -->
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-bold text-green-600 mb-4">WELCOME BACK</h2>
                    <p class="text-gray-600 text-lg mb-1">Enter the username and password</p>
                    <p class="text-gray-600 text-lg mb-6">to log in to bms</p>
                    <p class="text-green-500 font-medium">- Student -</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-6">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input 
                                id="email" 
                                class="input-field w-full pl-12 pr-4 py-4 rounded-full text-gray-700 placeholder-gray-400 text-lg" 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                placeholder="Username"
                                required 
                                autofocus
                                autocomplete="username"
                            >
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-2 ml-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input 
                                id="password" 
                                class="input-field w-full pl-12 pr-4 py-4 rounded-full text-gray-700 placeholder-gray-400 text-lg" 
                                type="password" 
                                name="password" 
                                placeholder="Password"
                                required
                                autocomplete="current-password"
                            >
                        </div>
                        @error('password')
                            <p class="text-red-500 text-sm mt-2 ml-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me (Hidden but functional) -->
                    <input type="hidden" name="remember" value="1">

                    <!-- Buttons -->
                    <div class="flex space-x-4 mb-6">
                        <button 
                            type="submit" 
                            class="btn-signin flex-1 text-white px-8 py-4 rounded-full font-semibold text-lg shadow-lg"
                        >
                            SIGN IN
                        </button>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a class=" text-sm text-green-500 hover:text-green-700 hover:underline transition-colors"
                               href="{{ route('register') }}">
                                {{ __('Don\'t have an account? Register') }}
                            </a>
                        </div>

                        <!-- Forgot Password -->
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a 
                                    class="text-sm text-green-500 hover:text-green-700 hover:underline transition-colors" 
                                    href="{{ route('password.request') }}"
                                >
                                    Forgot your password?
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>