<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Greetings!</title>
        <style>
            body {
                background: linear-gradient(-45deg, #4e54c8, #0083b0, #ff9a8b, #ff6a88, #ff7eb3);
                background-size: 400% 400%;
                animation: gradient 12s ease infinite;
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

            @keyframes gradient {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }

            h1 {
                font-size: 3.5rem;
                margin-bottom: 10px;
                font-weight: bold;
            }

            h2 {
                font-size: 2rem;
                font-weight: 400;
            }

            .btn-back {
                padding: 10px 20px;
                font-size: 1.2rem;
                font-weight: bold;
                background-color: #ff7eb3;
                border-radius: 25px;
                color: white;
                text-decoration: none;
                margin-top: 30px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
            }

            .btn-back:hover {
                background-color: #ff5c9e;
            }
        </style>
    </head>

    <body>
        <h1>Welcome!</h1>
        <h2>This is Ark's Test Route</h2>
        <a href="{{ url('/') }}" class="btn-back">Back</a>
    </body>
</html>
