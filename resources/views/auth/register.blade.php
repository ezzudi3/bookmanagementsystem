<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System - Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            display: flex;
            align-items: center;
            gap: 80px;
            max-width: 1200px;
            width: 100%;
        }

        .brand {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: #22c55e;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .brand-text h1 {
            color: #22c55e;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .brand-text p {
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .left-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
        }

        .device-mockup {
            position: relative;
            width: 300px;
            height: 200px;
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .screen {
            width: 200px;
            height: 140px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
        }

        .screen h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .form-mockup {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 80%;
        }

        .input-mockup {
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
        }

        .input-mockup:first-child {
            width: 100%;
        }

        .input-mockup:nth-child(2) {
            width: 90%;
        }

        .input-mockup:nth-child(3) {
            width: 85%;
        }

        .input-mockup:nth-child(4) {
            width: 95%;
        }

        .button-mockup {
            height: 12px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 6px;
            margin-top: 8px;
            width: 60%;
            align-self: center;
        }

        .security-icon {
            width: 80px;
            height: 80px;
            background: #22c55e;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
        }

        .security-icon svg {
            width: 40px;
            height: 40px;
            color: white;
        }

        .character {
            position: absolute;
            right: -60px;
            top: -20px;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .character-body {
            width: 60px;
            height: 80px;
            background: #f97316;
            border-radius: 30px 30px 20px 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .character-head {
            width: 40px;
            height: 40px;
            background: #fdba74;
            border-radius: 50%;
            position: absolute;
            top: -20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .character-hair {
            width: 35px;
            height: 20px;
            background: #1f2937;
            border-radius: 20px 20px 0 0;
            position: absolute;
            top: -15px;
        }

        .character-arms {
            position: absolute;
            width: 20px;
            height: 40px;
            background: #fdba74;
            border-radius: 10px;
        }

        .character-arm-left {
            left: -15px;
            top: 10px;
            transform: rotate(-20deg);
        }

        .character-arm-right {
            right: -15px;
            top: 10px;
            transform: rotate(20deg);
        }

        .character-shirt {
            width: 45px;
            height: 50px;
            background: #22c55e;
            border-radius: 20px 20px 15px 15px;
            position: absolute;
            top: 15px;
        }

        .character-legs {
            position: absolute;
            bottom: -25px;
            display: flex;
            gap: 8px;
        }

        .character-leg {
            width: 12px;
            height: 25px;
            background: #1f2937;
            border-radius: 6px;
        }

        .right-section {
            flex: 1;
            max-width: 500px;
        }

        .welcome-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .welcome-title {
            font-size: 48px;
            font-weight: 800;
            color: #22c55e;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .welcome-subtitle {
            color: #6b7280;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .user-type {
            color: #22c55e;
            font-size: 14px;
            font-weight: 600;
            padding: 0 10px;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            color: #374151;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 16px 20px;
            padding-left: 50px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: #22c55e;
            background: white;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 20px;
            height: 20px;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
        }

        .form-footer {
            text-align: center;
            margin-top: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-footer a {
            color: #22c55e;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #16a34a;
            text-decoration: underline;
        }

        .error {
            color: #ef4444;
            font-size: 12px;
            margin-top: 4px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                gap: 40px;
            }
            
            .left-section {
                order: 2;
            }
            
            .right-section {
                order: 1;
                max-width: 100%;
            }

            .welcome-title {
                font-size: 36px;
            }
            
            .character {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="brand">
        <div class="brand-icon">📚</div>
        <div class="brand-text">
            <h1>BOOK</h1>
            <p>Management System</p>
        </div>
    </div>

    <div class="container">
        <div class="left-section">
            <div class="device-mockup">
                <div class="screen">
                    <h3>REGISTER</h3>
                    <div class="form-mockup">
                        <div class="input-mockup"></div>
                        <div class="input-mockup"></div>
                        <div class="input-mockup"></div>
                        <div class="input-mockup"></div>
                        <div class="button-mockup"></div>
                    </div>
                </div>
                <div class="character">
                    <div class="character-body">
                        <div class="character-head">
                            <div class="character-hair"></div>
                        </div>
                        <div class="character-shirt"></div>
                        <div class="character-arms character-arm-left"></div>
                        <div class="character-arms character-arm-right"></div>
                        <div class="character-legs">
                            <div class="character-leg"></div>
                            <div class="character-leg"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="security-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <circle cx="12" cy="16" r="1"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
            </div>
        </div>

        <div class="right-section">
            <div class="welcome-section">
                <h1 class="welcome-title">CREATE ACCOUNT</h1>
                <p class="welcome-subtitle">Enter your information below</p>
                <p class="welcome-subtitle">to create your bms account</p>
                <p class="user-type">- Student -</p>
            </div>

            <div class="form-container">
                <form method="POST" action="{{ route('register') }}">
    @csrf
                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" placeholder="Full Name" required>
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <circle cx="12" cy="16" r="1"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <circle cx="12" cy="16" r="1"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" 
       href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <button type="submit" class="submit-btn ms-4">
        {{ __('Register') }}
    </button>
</div>
                </form>
            </div>
        </div>
    </div>

    <script>
        <button type="submit" class="submit-btn ms-4">
    {{ __('Register') }}
</button>


        function showError(fieldId, message) {
            const field = document.getElementById(fieldId);
            const error = document.createElement('div');
            error.className = 'error';
            error.textContent = message;
            field.parentNode.parentNode.appendChild(error);
        }

        function showLoginForm() {
            alert('Redirecting to login page...');
        }

        // Add input focus animations
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.parentNode.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>