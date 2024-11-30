<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Splash Screen</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8fafc;
            font-family: Arial, sans-serif;
        }
        .splash-screen {
            text-align: center;
        }
        .splash-screen h1 {
            font-size: 3em;
            color: #636b6f;
        }
        .splash-screen p {
            font-size: 1.2em;
            color: #636b6f;
        }
    </style>
</head>
<body>
    <div class="splash-screen">
        <h1>Welcome to Laravel</h1>
        <p>Redirecting to the dashboard...</p>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '/app/dashboard';
        }, 3000); // Redirect after 3 seconds
    </script>
</body>
</html>
