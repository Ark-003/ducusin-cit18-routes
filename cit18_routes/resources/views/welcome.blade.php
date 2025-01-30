<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Laravel</title>
        <style>
            body {
                background: linear-gradient(135deg, #1a1a40, #0f3460);
                background-size: cover;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-align: center;
                font-family: Arial, sans-serif;
                color: white;
                margin: 0;
            }

            h1 {
                font-size: 3rem;
                margin-bottom: 20px;
            }

            .button-container {
                display: flex;
                gap: 20px;
            }

            .btn {
                display: inline-block;
                padding: 12px 30px;
                font-size: 1.2rem;
                font-weight: bold;
                text-transform: uppercase;
                text-decoration: none;
                color: white;
                border-radius: 50px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                background-size: 200% auto;
                background-image: linear-gradient(90deg, #6a11cb 0%, #2575fc 50%, #6a11cb 100%);
                transition: all 0.4s ease-in-out;
                border: none;
                outline: none;
                cursor: pointer;
            }

            .btn:hover {
                background-position: right center;
                transform: translateY(-3px);
                box-shadow: 0 6px 14px rgba(0, 0, 0, 0.4);
            }
        </style>
    </head>

    <body>
        <h1>Welcome</h1>
        <div class="button-container">
            <a href="{{ url('/hello') }}" class="btn">Go to Hello Route</a>
            <a href="{{ url('/greet') }}" class="btn">Go to Greet Route</a>
        </div>
    </body>
</html>
