<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System - Forgot Password</title>
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
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .form-mockup {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 80%;
            align-items: center;
        }

        .input-mockup {
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
            width: 90%;
        }

        .button-mockup {
            height: 12px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 6px;
            margin-top: 8px;
            width: 70%;
        }

        .email-icon {
            width: 80px;
            height: 80px;
            background: #22c55e;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .email-icon svg {
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
            transform: rotate(-30deg);
        }

        .character-arm-right {
            right: -15px;
            top: 10px;
            transform: rotate(30deg);
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

        .info-box {
            background: #f0f9ff;
            border: 2px solid #e0f2fe;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .info-icon {
            width: 24px;
            height: 24px;
            color: #0284c7;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .info-text {
            color: #0f172a;
            font-size: 14px;
            line-height: 1.6;
        }

        .status-message {
            background: #dcfce7;
            border: 2px solid #bbf7d0;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 24px;
            color: #166534;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .status-icon {
            width: 20px;
            height: 20px;
            color: #16a34a;
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

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .form-footer {
            text-align: center;
            margin-top: 24px;
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

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: #22c55e;
        }

        .back-btn svg {
            width: 16px;
            height: 16px;
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
                    <h3>PASSWORD RESET</h3>
                    <div class="form-mockup">
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
            
            <div class="email-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
            </div>
        </div>

        <div class="right-section">

            <div class="welcome-section">
                <h1 class="welcome-title">FORGOT PASSWORD</h1>
                <p class="welcome-subtitle">Don't worry, we'll help you reset it</p>
                <p class="welcome-subtitle">Enter your email to get started</p>
                <p class="user-type">- Password Recovery -</p>
            </div>

            <div class="form-container">
                <!-- Information Box -->
                <div class="info-box">
                    <svg class="info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 16v-4"/>
                        <path d="M12 8h.01"/>
                    </svg>
                    <div class="info-text">
                        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                    </div>
                </div>

                <!-- Session Status (would show after form submission) -->
                <div id="status-message" class="status-message" style="display: none;">
                    <svg class="status-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span id="status-text"></span>
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn" id="submit-btn">
                        EMAIL PASSWORD RESET LINK
                    </button>

                    <div class="form-footer">
                        <a href="{{ route('login') }}" onclick="goToLogin(event)">Remember your password? Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submit-btn');
            const originalText = submitBtn.textContent;
            
            submitBtn.textContent = 'SENDING EMAIL...';
            submitBtn.disabled = true;
            
            // Simulate the process (in real app, this would be handled by Laravel)
            setTimeout(() => {
                showStatusMessage('We have emailed your password reset link! Please check your inbox.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
            
            // Don't prevent default in real app - let Laravel handle it
            e.preventDefault(); // Only for demo purposes
        });

        function showStatusMessage(message) {
            const statusDiv = document.getElementById('status-message');
            const statusText = document.getElementById('status-text');
            
            statusText.textContent = message;
            statusDiv.style.display = 'flex';
            
            // Scroll to top to show message
            statusDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function goBack() {
            // In real app, this would navigate to login page
            alert('Redirecting to login page...');
        }

        function goToLogin(event) {
            event.preventDefault();
            // In real app, this would navigate to login page
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

        // Show status message if there's a session status (Laravel would handle this)
        document.addEventListener('DOMContentLoaded', function() {
            // This would be populated by Laravel's session status
            // @if (session('status'))
            //     showStatusMessage("{{ session('status') }}");
            // @endif
        });
    </script>
</body>
</html>