<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arkx Anime Renting Shop</title>
        <style>
            body {
                background: linear-gradient(135deg, #ff758c, #ff7eb3);
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
                text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
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
                background-image: linear-gradient(90deg, #ff512f 0%, #dd2476 50%, #ff512f 100%);
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

            footer {
                position: absolute;
                bottom: 20px;
                font-size: 0.9rem;
                color: #f0f0f0;
                text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>

    <body>
        <h1>Welcome to Arkx's Anime Gallery</h1>
        <a href="{{ url('/anime-gallery') }}" class="btn">See Products</a>
        <footer>
            The listed data in the anime products are based on MyAnimeList data.
        </footer>
    </body>
</html>
