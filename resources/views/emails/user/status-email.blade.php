<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Status Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf9 100%);
            padding: 30px 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }
        
        .email-container {
            max-width: 700px;
            width: 100%;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
            position: relative;
        }
        
        .logo {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 15px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 25px;
            border-radius: 30px;
            backdrop-filter: blur(5px);
        }
        
        .header h1 {
            font-size: 36px;
            margin: 20px 0 10px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .header p {
            font-size: 18px;
            opacity: 0.9;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .content {
            padding: 40px;
        }
        
        .greeting {
            font-size: 20px;
            margin-bottom: 30px;
            color: #444;
            line-height: 1.6;
        }
        
        .status-card {
            background: white;
            border-radius: 16px;
            padding: 35px;
            text-align: center;
            margin-bottom: 35px;
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .status-icon {
            width: 110px;
            height: 110px;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 52px;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .status-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .status-message {
            font-size: 20px;
            color: #555;
            margin-bottom: 25px;
            line-height: 1.7;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .login-details {
            background: #f8f9ff;
            border-radius: 16px;
            padding: 35px;
            margin: 40px 0 30px;
            border: 1px solid #e6e9ff;
            position: relative;
        }
        
        .login-details h3 {
            font-size: 26px;
            margin-bottom: 25px;
            color: #2c3e50;
            text-align: center;
        }
        
        .credentials {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .credential-box {
            background: white;
            border-radius: 12px;
            padding: 22px;
            flex: 1;
            min-width: 220px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            border: 1px solid #eee;
            position: relative;
        }
        
        .credential-box strong {
            display: block;
            margin-bottom: 12px;
            color: #6c757d;
            font-size: 17px;
        }
        
        .credential-box .value {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            word-break: break-all;
            padding-right: 40px;
        }
        
        .copy-btn {
            position: absolute;
            right: 15px;
            bottom: 22px;
            background: #f1f3f9;
            border: none;
            border-radius: 8px;
            padding: 8px 12px;
            color: #2575fc;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: 600;
        }
        
        .copy-btn:hover {
            background: #2575fc;
            color: white;
        }
        
        .copy-btn.copied {
            background: #28a745;
            color: white;
        }
        
        .btn-container {
            text-align: center;
            margin-top: 10px;
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            text-decoration: none;
            padding: 18px 45px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 19px;
            margin: 15px 0;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(37, 117, 252, 0.35);
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 117, 252, 0.45);
        }
        
        .btn i {
            margin-right: 10px;
        }
        
        .support {
            text-align: center;
            padding: 35px;
            background: #f9fbfd;
            margin-top: 25px;
            border-radius: 16px;
            border: 1px solid #edf2f7;
        }
        
        .support h3 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .support p {
            font-size: 19px;
            color: #555;
            max-width: 500px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        
        .contact-info {
            display: flex;
            justify-content: center;
            gap: 35px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
            color: #555;
            background: rgba(37, 117, 252, 0.08);
            padding: 12px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            background: rgba(37, 117, 252, 0.15);
            transform: translateY(-3px);
        }
        
        .contact-item i {
            color: #2575fc;
            font-size: 20px;
        }
        
        .footer {
            background: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 35px 30px;
            font-size: 17px;
        }
        
        .footer p {
            margin: 12px 0;
            opacity: 0.85;
        }
        
        .social-icons {
            margin: 25px 0;
        }
        
        .social-icons a {
            display: inline-block;
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 10px;
            color: white;
            line-height: 48px;
            font-size: 20px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: #2575fc;
            transform: translateY(-3px);
        }
        
        /* Status-specific styling */
        .status-pending .status-icon {
            background: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }
        
        .status-active .status-icon {
            background: rgba(40, 167, 69, 0.15);
            color: #28a745;
            animation: bounce 1.5s infinite;
        }
        
        .status-success .status-icon {
            background: rgba(23, 162, 184, 0.15);
            color: #17a2b8;
            animation: tada 1.5s infinite;
        }
        
        .status-cancelled .status-icon {
            background: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }
        
        .status-failed .status-icon {
            background: rgba(253, 126, 20, 0.15);
            color: #fd7e14;
        }
        
        .status-hold .status-icon {
            background: rgba(108, 117, 125, 0.15);
            color: #6c757d;
            animation: pulse 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-25px);}
            60% {transform: translateY(-12px);}
        }
        
        @keyframes tada {
            0% {transform: scale(1);}
            10%, 20% {transform: scale(0.9) rotate(-3deg);}
            30%, 50%, 70%, 90% {transform: scale(1.1) rotate(3deg);}
            40%, 60%, 80% {transform: scale(1.1) rotate(-3deg);}
            100% {transform: scale(1) rotate(0);}
        }
        
        /* Responsive design */
        @media (max-width: 700px) {
            .content {
                padding: 25px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .header h1 {
                font-size: 28px;
            }
            
            .status-icon {
                width: 90px;
                height: 90px;
                font-size: 42px;
            }
            
            .status-title {
                font-size: 26px;
            }
            
            .status-message {
                font-size: 18px;
            }
            
            .credentials {
                flex-direction: column;
            }
            
            .login-details {
                padding: 25px;
            }
            
            .credential-box {
                min-width: 100%;
            }
            
            .support {
                padding: 25px;
            }
            
            .contact-info {
                flex-direction: column;
                gap: 15px;
                align-items: center;
            }
            
            .contact-item {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .btn {
                padding: 16px 35px;
                font-size: 17px;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 24px;
            }
            
            .status-icon {
                width: 80px;
                height: 80px;
                font-size: 36px;
            }
            
            .status-title {
                font-size: 24px;
            }
            
            .status-message {
                font-size: 17px;
            }
            
            .login-details h3 {
                font-size: 22px;
            }
            
            .support h3 {
                font-size: 22px;
            }
            
            .support p {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">PackageManager Pro</div>
            <h1>Package Status Update</h1>
            <p>Your package status has been updated. See details below.</p>
        </div>
        
        <div class="content">
            <p class="greeting">Hello <strong>John Smith</strong>,</p>
            
            <!-- Status card - dynamically changes based on status -->
            <div class="status-card status-active">
                <div class="status-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2 class="status-title">Active</h2>
                <p class="status-message">Your account is now active. You can login using the details below.</p>
            </div>
            
            <div class="login-details">
                <h3>Your Login Credentials</h3>
                <div class="credentials">
                    <div class="credential-box">
                        <strong>Login Email</strong>
                        <span class="value">john.smith@example.com</span>
                    </div>
                    <div class="credential-box">
                        <strong>Password</strong>
                        <span class="value" id="password-value">p@ssw0rd123!</span>
                        <button class="copy-btn" onclick="copyPassword()">Copy</button>
                    </div>
                </div>
                <div class="btn-container">
                    <a href="https://yourdomain.com/login" class="btn">
                        <i class="fas fa-sign-in-alt"></i> Login to Your Account
                    </a>
                </div>
            </div>
            
            <div class="support">
                <h3>Need Assistance?</h3>
                <p>Our support team is ready to help you with any questions or issues you might encounter.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>support@packagemanager.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 (800) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-comments"></i>
                        <span>Live Chat Support</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>© 2025 PackageManager Pro. All rights reserved.</p>
            <p>123 Business Avenue, Suite 100, San Francisco, CA 94107</p>
            <p><a href="#" style="color: #5dade2; text-decoration: none;">Unsubscribe</a> | <a href="#" style="color: #5dade2; text-decoration: none;">Privacy Policy</a></p>
        </div>
    </div>

    <script>
        function copyPassword() {
            const passwordValue = document.getElementById('password-value').textContent;
            const copyBtn = document.querySelector('.copy-btn');
            
            // Copy to clipboard
            navigator.clipboard.writeText(passwordValue)
                .then(() => {
                    // Visual feedback
                    copyBtn.textContent = 'Copied!';
                    copyBtn.classList.add('copied');
                    
                    // Revert after 2 seconds
                    setTimeout(() => {
                        copyBtn.textContent = 'Copy';
                        copyBtn.classList.remove('copied');
                    }, 2000);
                })
                .catch(err => {
                    console.error('Failed to copy password: ', err);
                    copyBtn.textContent = 'Error';
                    setTimeout(() => {
                        copyBtn.textContent = 'Copy';
                    }, 2000);
                });
        }
        
        // Status switch simulation (for demo purposes)
        function changeStatus(status) {
            const statusCard = document.querySelector('.status-card');
            const statusIcon = statusCard.querySelector('.status-icon i');
            const statusTitle = statusCard.querySelector('.status-title');
            const statusMessage = statusCard.querySelector('.status-message');
            
            // Reset classes
            statusCard.className = 'status-card';
            statusCard.classList.add(`status-${status}`);
            
            // Remove all animations
            statusCard.style.animation = 'none';
            setTimeout(() => {
                statusCard.style.animation = '';
            }, 10);
            
            // Update content based on status
            switch(status) {
                case 'pending':
                    statusIcon.className = 'fas fa-hourglass-half';
                    statusTitle.textContent = 'Pending';
                    statusMessage.textContent = "We've received your request and it's currently under review.";
                    break;
                case 'active':
                    statusIcon.className = 'fas fa-check-circle';
                    statusTitle.textContent = 'Active';
                    statusMessage.textContent = 'Your account is now active. You can login using the details below.';
                    break;
                case 'success':
                    statusIcon.className = 'fas fa-trophy';
                    statusTitle.textContent = 'Success';
                    statusMessage.textContent = 'Congratulations! Your payment has been verified and your account is now fully active.';
                    break;
                case 'cancelled':
                    statusIcon.className = 'fas fa-times-circle';
                    statusTitle.textContent = 'Cancelled';
                    statusMessage.textContent = 'Unfortunately, your package request has been cancelled. If this was a mistake, please contact support.';
                    break;
                case 'failed':
                    statusIcon.className = 'fas fa-exclamation-triangle';
                    statusTitle.textContent = 'Failed';
                    statusMessage.textContent = 'Your transaction failed. Kindly retry or reach out to our team.';
                    break;
                case 'hold':
                    statusIcon.className = 'fas fa-pause-circle';
                    statusTitle.textContent = 'On Hold';
                    statusMessage.textContent = 'Your account is on hold temporarily. We will notify you with further updates.';
                    break;
            }
        }
    </script>
</body>
</html>