<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Rent Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            padding: 14px 30px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        h1 {
            flex-grow: 1;
            text-align: center;
            margin: 0;
            font-size: 24px;
        }
        .container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            position: relative;
            background: white;
            padding: 15px;
            margin: 15px;
            width: 280px;
            border-radius: 10px;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: left;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        .card h3 {
            text-align: center;
            margin: 10px 0;
            font-size: 18px;
        }
        .card .genre {
            font-style: italic;
            color: #555;
            margin-bottom: 5px;
        }
        .info {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .rating {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .rating-number {
            font-size: 24px;
            font-weight: bold;
            padding: 5px 12px;
            background:rgb(238, 190, 33);
            border-radius: 8px;
            color: #333;
            flex-shrink: 0;
            margin-left:5px;
            margin-right:45px;
        }
        .stars {
            color: gold;
            font-size: 30px;
            display: flex;
            gap: 3px;
            flex-wrap: wrap;
            justify-content: flex-end;
            flex-grow: 1;
        }
        .views {
            font-size: 14px;
            color: #666;
        }
        .price {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 22px;
            font-weight: bold;
            color:rgb(190, 43, 80);
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="javascript:history.back()" class="back-button">Back</a>
        <h1>Anime Gallery</h1>
        <div></div>
    </div>

    <div class="container">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}">
                <h3>{{ $product['title'] }}</h3>
                <p class="genre">{{ $product['genre'] }}</p>
                <div class="info">
                    <div class="rating">
                        <span class="rating-number">{{ $product['rating'] }}</span>
                        <span class="stars">
                            @php
                                $rating = round((float) $product['rating']); // Round off rating
                                $filledStars = min($rating, 10);
                                $emptyStars = 10 - $filledStars;
                            @endphp

                            @for ($i = 0; $i < $filledStars; $i++)
                                ★
                            @endfor
                            @for ($i = 0; $i < $emptyStars; $i++)
                                ☆
                            @endfor
                        </span>
                    </div>
                    <p class="views">{{ $product['views'] }} views</p>
                </div>
                <p class="price">{{ $product['price'] }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
