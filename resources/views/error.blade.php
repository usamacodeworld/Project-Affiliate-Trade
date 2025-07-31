<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body { font-family: sans-serif; padding: 2rem; }
        .error-box { 
            background: #ffebee; 
            border: 1px solid #ffcdd2; 
            padding: 2rem; 
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="error-box">
        <h1>Application Error</h1>
        <p>{{ $message ?? 'An unexpected error occurred' }}</p>
        
        <h3>Troubleshooting:</h3>
        <ul>
            <li>Check your Alpaca API credentials in .env</li>
            <li>Verify network connection to Alpaca API</li>
            <li>Check storage/logs/laravel.log for details</li>
            <li>Clear cache: php artisan optimize:clear</li>
        </ul>
        
        <a href="/">Try Again</a>
    </div>
</body>
</html>